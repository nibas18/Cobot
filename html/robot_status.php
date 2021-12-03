<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Robot Status</title>
        <link rel="stylesheet" href="../css_style/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    </head>
    <body>
    <?php
    $servername = "sql11.freesqldatabase.com";
    $username = "sql11455522";
    $password = "CUYAidmbwy";
    $database ="sql11455522";
    $db_connection = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM Capacity";
    $query = mysqli_query($db_connection, $sql);
    $count = mysqli_num_rows($query);
    if($count > 0){
        while($row = mysqli_fetch_array($query)){
            echo '<div class="robot_cap_overview">';
            echo '<div class="battery_div">';
            echo '<i id="battery" class="iconify" data-icon="ph:battery-charging-bold"></i>';
            echo '<p>' . $row['Charge']. '</p>';
            echo '</div>';
            echo '<div class="trash_div">';
            echo '<i id="trash" class="iconify" data-icon="bx:bx-trash"></i>';
            echo '<p>' . $row['Trash']. '</p>';
            echo '</div>';
            echo '<div class="liquid_div">';
            echo '<i id="liquid" class="iconify" data-icon="carbon:rain-drop"></i>';
            echo '<p>' . $row['Liquid']. '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>

    <div class="content">
        <?php require("header.php") ?>
        
        <div class="background_color"></div>
        <img class="robots_img" src="../images/robots_img.png" width="337" height="227">
<!--
        <div class="battery_div">
            <i id="battery" class="iconify" data-icon="ph:battery-charging-bold"></i>
            <p>87%</p>
        </div>

        <div class="trash_div">
            <i id="trash" class="iconify" data-icon="bx:bx-trash"></i>
            <p>10%</p>
        </div>

        <div class="liquid_div">
            <i id="liquid" class="iconify" data-icon="carbon:rain-drop"></i>
            <p>99%</p>
        </div>
!-->

        <div class="footer"></div>
    </div>

    </body>
</html>