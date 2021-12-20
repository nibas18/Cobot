<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cafeteria Map</title>
    <link rel="stylesheet" href="../css_style/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="../backend/menu.js"></script>
    <link href="../database/db_connection.php">

</head>

<body>
    <img id="table" src="../images/table.png" width="10" height="10"></img>
    <div class="content">
        <?php include("../layout/header.php") ?>
        <div class="wrapper_background_img"></div>

        <div class="map_caf">

            <canvas id="canvas" width="308" height="447" style="border: 1px solid #000000"></canvas>

            <script src="zones.js">

            </script>

            <script>
                let zone1 = new Zone(9, 133, 221, 91, { table1: [20, 30, 30, 28], table2: [100, 30, 30, 28], table3: [170, 30, 30, 28] })
                let zone2 = new Zone(9, 224, 191, 74, { table1: [20, 25, 20, 40], table2: [100, 25, 10, 10], table3: [155, 25, 40, 28] })
                let zone3 = new Zone(9, 298, 191, 81, { table1: [20, 25, 10, 10], table2: [100, 25, 30, 10], table3: [155, 25, 40, 28] })
                let zone4 = new Zone(200, 224, 106, 155, { table1: [20, 25, 10, 10], table2: [20, 100, 10, 10], table3: [60, 60, 10, 10] })

                let t = new Zone();
                var c = document.getElementById("canvas");
                var ctx = c.getContext("2d");
                ctx.beginPath();
                function testFunction(){
                    console.log("Welcome");
                }
                //c.zone1.addEventListener('click', testFunction);



                //zone1
                //ctx.rect(9,133, 221, 91);
                //zone2
                //ctx.rect(9,224, 191, 74);
                //zone3
                //ctx.rect(9,298, 191, 81);
                //zone4
                //ctx.rect(200, 224, 106, 155);
                //ctx.stroke();
            </script>

            <div class="map_location"></div>
        </div>
        <?php
            include("../layout/below_menu.php");
            include("../layout/task_list.php");
            include("../layout/robot_list.php");
        ?>
    </div>

</body>

</html>