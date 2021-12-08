class Zone {

    constructor(start_x, start_y, width, height, tables){
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
        ctx.rect(start_x, start_y, this.width,this.height);
        ctx.stroke();

        for (const [key, value] of Object.entries(this.tables)){
            ctx.rect(value[0]+this.start_x, value[1]+this.start_y, value[2], value[3]);
            ctx.stroke();
        //      img.onload = function (){
        //         ctx.drawImage(img, value[0]+this.start_x, value[1]+this.start_y, 15, 15);
        //      }
        // }

    }
    }


}

// start_x og start_y, width, height kan stores i jeres database under tablet "zones"
//var zone1 = new Zone(20, 20, 160,160, {table1: [40, 40, 10,10],table2:[60,60, 10, 10],table3:[80,80,10,10]})


