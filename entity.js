class Entity {

    constructor(position, behaviours) {
        this.behaviours = behaviours;
        this.position = position;
        this.scale = 1;
        this.behaviours.forEach(element => {
            element.entity = this;
        });
    }

    awake() {
        this.behaviours.forEach(element => {
            element.awake();
        });
    }

    update() {
        this.position.updateScale();

        this.behaviours.forEach(element => {
            // if (element.enabled) {
            element.update();
            if (debugMode) {
                element.onDebug();
            }
            // }

        });
    }

    addBehaviour(behaviour) {
        this.behaviours.push(behaviour);
    }

    onUpdateScale() {
        this.position.x = canvas.width * this.position.scaleX;
        this.position.y = canvas.height * this.position.scaleY;
    }
}

/* ------Behaviours------ */
class Behaviour {
    /*enabled = true;

    setEnabled(value) {
        this.enabled = value;
        if (value) {
            this.onEnable();
        } else {
            this.onDisable()
        }
    }*/

    awake() {}
    update() {}
    onEnable() {}
    onDisable() {}
    onMouseClick() {}
    onMouseEnter() {}
    onMouseExit() {}
    onClickOutside() {}

    onDebug() {}
}

class SpriteRenderer extends Behaviour {
    constructor(spriteURI, scale) {
        super();
        this.scale = scale;
        this.image = new Image()
        this.image.src = spriteURI;
        this.position = new Vector2(0, 0);
    }

    update() {
        this.updateProperties();
        this.draw();
    }

    updateProperties() {
        this.spriteScale = this.image.width / this.image.height;
        this.width = this.scale * this.entity.scale * scale * this.spriteScale;
        this.height = this.scale * this.entity.scale * scale;
        this.position.x = this.entity.position.x - this.width * 0.5;
        this.position.y = this.entity.position.y - this.height * 0.5;
    }

    draw() {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);
    }
}

class Movement extends Behaviour {
    constructor(speed) {
        super();
        this.speed = speed;
        this.target = null;
    }

    update() {
        if (this.target != null) {
            let velocity = this.entity.position.directionTo(this.target.position);
            velocity.normalize();

            let move = multiplyVectorByScalar(velocity, this.speed);

            let currentPos = this.entity.position;

            this.entity.position.setScale(move.x + currentPos.x, move.y + currentPos.y);

        }
    }
}

let timeToClean = 2000;
let state = { idle: 0, activated: 1, returning: 2, cleaning: 3 }
class Robot extends Behaviour {
    constructor(movement) {
        super();
        this.movement = movement;
        this.state = state.idle;
        this.cleaningTimer = 0;
        this.target = null;
    }

    awake() {
        this.entity.robot = this;
    }

    update() {
        switch (this.state) {
            case state.idle:
                break;
            case state.activated:
                if (isPointInRange(this.movement.target.position, this.entity.position, 0.4)) {
                    this.state = state.cleaning;
                    this.cleaningTimer = timeToClean;
                }
                break;
            case state.returning:
                if (isPointInRange(this.movement.target.position, this.entity.position, 0.4)) {
                    this.state = state.idle;
                    this.movement.target = null;
                }
                break;
            case state.cleaning:
                this.cleaningTimer = this.cleaningTimer - 1000 / fps;
                if (this.cleaningTimer <= 0) {
                    this.movement.target = restingPoint;
                    this.state = state.activated;
                   
                    // this.state = state.returning;
                }

                break;
            default:
                break;
        }
    }

    onActivate(target) {
        this.movement.target = target;
        this.state = state.activated;
    }

}

let dirtyDelay = { min: 3000, max: 16000 }
class Table extends Behaviour {

    constructor() {
        super();
        this.timer = getRandomFloat(dirtyDelay.min, dirtyDelay.max);
        this.isDirty = false;
    }

    update() {
        if (this.isDirty) return;
        this.timer = this.timer - 1000 / fps;
        if (this.timer <= 0) {
            this.onDirty();
        }
    }

    onDirty() {
        this.isDirty = true;
        onDirtyTable(this.entity);
    }

    onCleaned() {
        this.isDirty = false;
        this.timer = getRandomFloat(dirtyDelay.min, dirtyDelay.max);
    }

}