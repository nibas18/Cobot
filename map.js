let canvas;
let ctx;

let scale = 1;
const fps = 60;
let debugMode = false;

let entities = [];

let rawRobots = [
    {
        name: "Robot 1",
        position: { x: 0.2, y: 0.2 }
    },
    {
        name: "Robot 2",
        position: { x: 0.8, y: 0.8 }
    }
]

let rawPoints = [
    {
        name: "Table 1",
        position: { x: 0.4, y: 0.4 }
    },
    {
        name: "Table 2",
        position: { x: 0.2, y: 0.8 }
    }
]

$(document).ready(function () {
    canvas = document.getElementById("canvas");
    ctx = canvas.getContext("2d");
   
    getPoints();
     getRobots();
    resizeCanvas();
    setInterval(function () { update(); }, 1000 / fps);
});

window.addEventListener("resize", resizeCanvas);

function resizeCanvas() {
    scale = canvas.width;
    pageScale = window.innerWidth;
    if (canvas.height < canvas.width) {
        pageScale = window.innerHeight;
        scale = canvas.height;
    }
   
    entities.forEach(element => {
        element.onUpdateScale();
    });

    update();
}

function update() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    entities.forEach(element => {
        element.update();
    });
}

function getRobots() {
    //Get Robots. Current implementation is only for looks.
    for(i = 0; i < rawRobots.length; i++){
        for(i = 0; i < rawRobots.length; i++){
            let point = rawRobots[i];
    
            let position = new Vector2Scale(point.position.x, point.position.y);
            let spriteRenderer = new SpriteRenderer("../images/Armature_Idle_00.png", 0.1);
            let movement = new Movement(0.2);
            movement.target= entities[i];
            let entity = new Entity(position, [spriteRenderer, movement]);
    
            entity.awake();
            entities.push(entity);
        }
    }
}

function getPoints() {
    //Get POIs. Current implementation is only for looks.
    for(i = 0; i < rawPoints.length; i++){
        let point = rawPoints[i];

        let position = new Vector2Scale(point.position.x, point.position.y);
        let spriteRenderer = new SpriteRenderer("../images/table_img.png", 0.1);
        let entity = new Entity(position, [spriteRenderer]);

        entity.awake();
        entities.push(entity);
    }
}
