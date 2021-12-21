<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cafeteria Map</title>
    <link rel="stylesheet" href="css_style/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="backend/menu.js"></script>
    <link href="database/db_connection.php" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="utilities.js"></script>
    <script src="entity.js"></script>
    <script src="map.js"></script>
</head>

<body>
    <div class="content">
        <?php include("layout/header.php") ?>
        <div class="wrapper_background_img"></div>
        
        <div class="map_caf">
            <canvas id="canvas" width="308" height="447" style="border: 1px solid #000000"></canvas>
            <button id="start_btn" onclick="startRobot()">Start Robot</button>
        </div>
        <?php
            include("layout/below_menu.php");
            include("layout/task_list.php");
            include("layout/robot_list.php");
        ?>
    </div>

</body>

</html>