let canvas = $(".canvas");
let ctx = canvas.getContext("2d");
let fps = 60;

let robots = []
let points = []

let rawRobots = [
    {
        name: "Robot 1",
        status: idle,
        position: { x: 0.2, y: 0.2 }
    },
    {
        name: "Robot 2",
        status: idle,
        position: { x: 0.8, y: 0.8 }
    }
]

let rawPoints = [
    {
        name: "Table 1",
        status: idle,
        position: { x: 0.4, y: 0.4 }
    },
    {
        name: "Table 2",
        status: idle,
        position: { x: 0.2, y: 0.4 }
    }
]

init();

function init() {
    getRobots();
    getPoints();
    setInterval(function () { update(); }, 1000 / fps);
}

function update() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    gameObjects.forEach(element => {
        element.update();
    });

    updateMouse();
}

function getRobots() {
    //Get Robots. Current implementation is only for looks.
    for(i = 0; i < rawRobots.length; i++){

    }

}

function getPoints() {
    //Get POIs. Current implementation is only for looks.
    for(i = 0; i < rawPoints.length; i++){
        let points = rawPoints[i];
        let spriteRenderer = new SpriteRenderer("../images/table_img.png", 0.5);
        let entity = new Entity(point.position, [spriteRenderer]);

        entity.awake();
        entities.push(entity);
    }
}
