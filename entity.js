class Entity {

    constructor(position, behaviours) {
        this.behaviours = behaviours;
        this.position = position;
        this.scale = 1;
        this.behaviours.forEach(element => {
            element.gameObject = this;
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
            if (element.enabled) {
                element.update();
                if (debugMode) {
                    element.onDebug();
                }
            }

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
    enabled = true;

    setEnabled(value) {
        this.enabled = value;
        if (value) {
            this.onEnable();
        } else {
            this.onDisable()
        }
    }

    awake() { }
    update() { }
    onEnable() { }
    onDisable() { }

    onMouseClick() { }
    onMouseEnter() { }
    onMouseExit() { }
    onClickOutside() { }

    onDebug() { }
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
        this.width = this.scale * this.gameObject.scale * scale * this.spriteScale;
        this.height = this.scale * this.gameObject.scale * scale;
        this.position.x = this.gameObject.position.x - this.width * 0.5;
        this.position.y = this.gameObject.position.y - this.height * 0.5;
    }

    draw() {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);
    }
}