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

let rawPoints = [{
    name: "Zone 1",
    position: { x: zone1.start_x, y: zone1.start_y },
    height: zone1.height,
    width: zone1.width,
    tables: {
        table1: { x: zone1.table1.start_x, y: zone1.table1.start_y, height:zone1.table1.height, width:zone1.table1.width},
        table2: { x: zone1.table2.start_x, y: zone1.table2.start_y, height:zone1.table2.height, width:zone1.table2.width},
        table3: { x: zone1.table3.start_x, y: zone1.table3.start_y, height:zone1.table3.height, width:zone1.table3.width}
    }
}
];
/*
let rawPoints = [{
        name: "Table 1",
        position: { x: 0.4, y: 0.4 }
    },
    {
        name: "Table 2",
        position: { x: 0.2, y: 0.8 }
    }
];
*/
$(document).ready(function () {
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
class Zone {

    constructor(start_x, start_y, width, height, tables) {
        this.start_x = start_x;
        this.start_y = start_y;
        this.width = width;
        this.height = height;
        this.tables = tables;

        var c = document.getElementById("canvas")
        var ctx = c.getContext("2d")
        // image 
        var img = document.getElementById("table");
        ctx.beginPath();
        //zonen
        ctx.rect(start_x, start_y, this.width, this.height);
        ctx.globalAlpha = 0.2;
        //kant
        ctx.stroke();

        //ctx.addEventListener('click', testFunction);
        // looper igennem de forskellige borde. 
        for (const [key, value] of Object.entries(this.tables)) {
            ctx.rect(value[0] + this.start_x, value[1] + this.start_y, value[2], value[3]);
            //ctx.stroke();
            ctx.drawImage(img, value[0] + this.start_x, value[1] + this.start_y, 30, 30);
            //img.onload = function (){
            //}
        }
    }

}





// start_x og start_y, width, height kan stores i jeres database under tablet "zones"
//var zone1 = new Zone(20, 20, 160,160, {table1: [40, 40, 10,10],table2:[60,60, 10, 10],table3:[80,80,10,10]})