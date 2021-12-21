let canvas;
let ctx;

let scale = 1;
const fps = 60;
let debugMode = false;

let entities = [];
let idlingRobots = [];
let dirtyTables = [];
let restingPoint;
// Der skal kun være en robot i vores simulation. 
let rawRobots = [{
        name: "Robot 1",
    },
    {
        name: "Robot 2",
    }
];
// skal erstattes med zoner, så i stedet for at det er borde som er markeret skal det være zoner.
let rawPoints = [{
        name: "Table 1",
        position: { x: 0.4, y: 0.4 }
    },
    {
        name: "Table 2",
        position: { x: 0.2, y: 0.8 }
    }
];

$(document).ready(function() {
    canvas = document.getElementById("canvas");
    //canvas.style.backgroundColor = "#FFFFFF";
    ctx = canvas.getContext("2d");
    // erstatter det med et specifikt punkt, men dette punkt er der 
    // hvor robotten går hen når den har udført sit arbejde.
    restingPoint = new Vector2Scale(0.1, 0.1);

    restingPoint = new Entity(new Vector2Scale(0.1, 0.1), []);
    getPoints();
    getRobots();
    resizeCanvas();
    setInterval(function() { update(); }, 1000 / fps);
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
    for (i = 0; i < rawRobots.length; i++) {
        for (i = 0; i < rawRobots.length; i++) {
            let robot = rawRobots[i];

            let position = new Vector2Scale(restingPoint.position.scaleX, restingPoint.position.scaleY);
            // Dette billede skal ændres. 
            let spriteRenderer = new SpriteRenderer("../images/robot.PNG", 0.1);
            let movement = new Movement(0.2);

            let robotBrain = new Robot(movement);
            let entity = new Entity(position, [spriteRenderer, movement, robotBrain]);
            idlingRobots.push(entity);
            entities.push(entity);
            entity.awake();
        }
    }
}
/*
function startRobot() {
    let entity = getRobots();
    idlingRobots.push(entity);
    entity.awake();
    //entities.push(entity);
}*/

function getPoints() {
    //Get POIs. Current implementation is only for looks.
    for (i = 0; i < rawPoints.length; i++) {
        let point = rawPoints[i];

        let position = new Vector2Scale(point.position.x, point.position.y);
        let spriteRenderer = new SpriteRenderer("../images/table.png", 0.1);
        let table = new Table();
        let entity = new Entity(position, [spriteRenderer, table]);

        entity.awake();
        entities.push(entity);
    }
}

function onDirtyTable(table) {
    dirtyTables.push(table);
    if (!idlingRobots.length <= 0) {
        let robot = idlingRobots.pop();
        robot.robot.onActivate(table);
    }
}