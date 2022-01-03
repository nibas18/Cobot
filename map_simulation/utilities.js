function multiplyVectorByScalar(vector, scalar) {
    return new Vector2(vector.x * scalar, vector.y * scalar);
}

function addVectors(vector1, vector2) {
    return new Vector2(vector1.x + vector2.x, vector1.y + vector2.y);
}

class Vector2 {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    normalize() {
        let length = this.getMagnitude();
        this.x = this.x / length;
        this.y = this.y / length;
    }

    getMagnitude() {
        return Math.sqrt(this.x * this.x + this.y * this.y);
    }
}

class Vector2Scale {
    constructor(scaleX, scaleY) {
        this.scaleX = scaleX;
        this.scaleY = scaleY;

        this.x = canvas.width * this.scaleX;
        this.y = canvas.height * this.scaleY;
    }

    setScale(x, y) {
        this.scaleX = x / canvas.width;
        this.scaleY = y / canvas.height;
    }

    add(vector2) {
        let x = this.x + vector2.x;
        let y = this.y + vector2.y;

        this.setScale(x, y);
    }

    updateScale() {
        this.x = canvas.width * this.scaleX;
        this.y = canvas.height * this.scaleY;
    }

    directionTo(vector2) {
        return new Vector2(vector2.scaleX - this.scaleX, vector2.scaleY - this.scaleY);
    }

    normalize() {
        let length = this.getMagnitude();
        this.x = this.x / length;
        this.y = this.y / length;
        setScale(this.x, this.y);
    }

    getMagnitude() {
        return Math.sqrt(this.x * this.x + this.y * this.y);
    }

    toString() {
        return `(cords(${this.x},${this.y}) scaled(${this.scaleX},${this.scaleY})`;
    }
}

function isPointInRange(reference, point, radius) {
    var a = reference.x-point.x;
    var b = reference.y-point.y;

    var c = Math.sqrt(a * a + b * b);
    console.log(a);
    return c < radius;
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getRandomFloat(min, max) {
    return Math.random() * (max - min + 1) + min;
}

function roundRect(ctx, x, y, width, height, radius, fill, opacity) {
    if (typeof radius === 'number') {
        radius = { tl: radius, tr: radius, br: radius, bl: radius };
    } else {
        var defaultRadius = { tl: 0, tr: 0, br: 0, bl: 0 };
        for (var side in defaultRadius) {
            radius[side] = radius[side] || defaultRadius[side];
        }
    }
    ctx.beginPath();
    ctx.moveTo(x + radius.tl, y);
    ctx.lineTo(x + width - radius.tr, y);
    ctx.quadraticCurveTo(x + width, y, x + width, y + radius.tr);
    ctx.lineTo(x + width, y + height - radius.br);
    ctx.quadraticCurveTo(x + width, y + height, x + width - radius.br, y + height);
    ctx.lineTo(x + radius.bl, y + height);
    ctx.quadraticCurveTo(x, y + height, x, y + height - radius.bl);
    ctx.lineTo(x, y + radius.tl);
    ctx.quadraticCurveTo(x, y, x + radius.tl, y);
    ctx.closePath();
    let prevOpacity = ctx.globalAlpha;
    ctx.globalAlpha = opacity;
    ctx.fillStyle = fill;
    ctx.fill();
    ctx.globalAlpha = prevOpacity;
}