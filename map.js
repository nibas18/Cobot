let canvas;
let ctx;

let scale = 1;
const fps = 60;
let debugMode = false;

let entities = [];
let idlingRobots = [];
let dirtyTables = [];
let restingPoint;
let rawFailureState = [{
    position: { x: 0.2, y: 0.30 }
}]

// Der skal kun være en robot i vores simulation. 
let rawRobots = [{
    name: "Robot 1",
}];

/*
let zone1 = new Zone(9, 133, 221, 91, {
    table1: [20, 30, 30, 28],
    table2: [100, 30, 30, 28],
    table3: [170, 30, 30, 28]
})
let zone2 = new Zone(9, 224, 191, 74, {
    table1: [20, 25, 20, 40],
    table2: [85, 25, 10, 10],
    table3: [150, 25, 40, 28]
})
let zone3 = new Zone(9, 298, 191, 81, {
    table1: [20, 25, 10, 10],
    table2: [85, 25, 10, 10],
    table3: [150, 25, 40, 28]
})
let zone4 = new Zone(200, 224, 106, 155, {
    table1: [20, 25, 10, 10],
    table2: [20, 100, 10, 10],
    table3: [60, 60, 10, 10]
})
*/
// skal erstattes med zoner, så i stedet for at det er borde som er markeret skal det være zoner.

let rawPoints = [{
        name: "Table 1",
        position: { x: 0.2, y: 0.7 }

    },
    {
        name: "Table 2",
        position: { x: 0.2, y: 0.5 }
    },
    {
        name: "Table 3",
        position: { x: 0.2, y: 0.3 }
    },
    {
        name: "Table 4",
        position: { x: 0.2, y: 0.9 }
    },
    {
        // y 0.5 definerer midten
        name: "Table 5",
        position: { x: 0.5, y: 0.7 }
    },
    {
        name: "Table 6",
        position: { x: 0.5, y: 0.5 }
    },
    {
        name: "Table 7",
        position: { x: 0.5, y: 0.3 }
    },
    {
        name: "Table 8",
        position: { x: 0.5, y: 0.9 }
    },
    {
        name: "Table 9",
        position: { x: 0.8, y: 0.7 }
    },
    {
        name: "Table 10",
        position: { x: 0.8, y: 0.5 }
    },
    {
        name: "Table 11",
        position: { x: 0.8, y: 0.3 }
    },
    {
        name: "Table 12",
        position: { x: 0.8, y: 0.9 }
    }
];

$(document).ready(function() {
    canvas = document.getElementById("canvas");
    canvas.style.backgroundColor = "#FFFFFF";
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
            //idlingRobots.push(entity);
            entities.push(entity);
            //entity.awake();
            return entity;
        }
    }
}

function startRobot() {
    let entity = getRobots();
    entity.awake();
}

function stopRobot() {
    let entity = getRobots();
    entity.stop();
}

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

function onFailureState() {
    for (i = 0; i < rawRobots.length; i++) {
        let point = rawRobots[i];
        //let position = new Vector2Scale(point.position.x, point.position.y);
        if (rawFailureState.position.x == point.position.x && rawFailureState.position.y == point.position.y) {
            console.log("failure has occured");
        }
    }
}