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
        <div class="header">
            <i id="back" class="iconify" data-icon="eva:arrow-ios-back-outline"></i>
            <i id="notification" class="iconify" data-icon="carbon:notification-new"></i>
            <i id="menu" class="iconify" data-icon="gg:menu-grid-o"></i>
        </div>
        <div class="wrapper_background_img"></div>

        <div class="map_caf">

            <canvas id="canvas" width="308" height="447" style="border: 1px solid #000000"></canvas>

            <script src="zones.js">

            </script>

            <script>
                let zone1 = new Zone(9, 133, 221, 91, { table1: [30, 45, 30, 28], table2: [100, 45, 30, 28], table3: [170, 45, 30, 28] })
                let zone2 = new Zone(9, 224, 191, 74, { table1: [60, 40, 20, 40], table2: [40, 40, 10, 10], table3: [60, 60, 10, 10] })
                let zone3 = new Zone(9, 298, 191, 81, { table1: [20, 20, 10, 10], table2: [40, 40, 10, 10], table3: [60, 60, 10, 10] })
                let zone4 = new Zone(200, 224, 106, 155, { table1: [20, 20, 10, 10], table2: [40, 40, 10, 10], table3: [60, 60, 10, 10] })

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

        <!--Below Menu-->
        <form id="overall_menu" class="below_menu">
            <i id="tasks" onclick="taskFunction()" class="iconify" data-icon="fluent:tasks-app-28-regular"></i>
            <i id="c_robots" onclick="robotFunction()" class="iconify" data-icon="mdi:robot-industrial"></i>
            <i id="zones" class="iconify" data-icon="carbon:map"></i>
            <i id="more" class="iconify" data-icon="fluent:more-circle-32-filled"></i>
        </form>

        <!--Task List!
        <div id="overall_task_list" class="task_list">
            <hr class="top_line">
            <p class="task_title">Lists of Tasks</p>
            <?php
            $servername = "sql11.freesqldatabase.com";
            $username = "sql11455522";
            $password = "CUYAidmbwy";
            $database ="sql11455522";
            $db_connection = mysqli_connect($servername, $username, $password, $database);
            //Another Testing:
            $sql = "SELECT * FROM Tasks";
            $query = mysqli_query($db_connection, $sql);
            //$row = mysqli_fetch_assoc($query);
            $count = mysqli_num_rows($query);
            if($count > 0){
                while($row = mysqli_fetch_array($query)){
                    echo '<hr class="underline">';
                    echo '<i id="x" class="iconify" data-icon="bi:x"></i>';
                    echo '<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>';
                    echo '<div class="task_txt">';
                    echo '<p class="rt">' . $row['Tasknumber']. ':</p>';
                    echo '<li>' . $row['Taskdescription']. '</li>';
                    echo '</div>';
                    echo '<hr class="underlines">';
                    echo '</div>';
                }
            }
            ?>

        </div>-->



        <!--Task List
        <div id="overall_task_list" class="task_list">
            <hr class="top_line">
            <p class="task_title">Lists of Tasks</p>

            <hr class="underline">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 1:</p>
                <li>Cleaning Zone 3</li>
            </div>

            <hr class="underlines">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 2:</p>
                <li>Cleaning Zone 1</li>
            </div>

            <hr class="underlines">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 3:</p>
                <li>Cleaning Floor in Zone 1</li>
            </div>

            <hr class="underlines">
        </div> !-->

        <!--Robot List-->
        <div id="overall_robot_list" class="robot_list">
            <hr class="top_line">
            <p class="robot_title">Lists of Robots</p>

            <hr class="underline">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="robots" class="iconify" data-icon="mdi:robot-excited-outline"></i>
            <div class="robot_txt">
                <p class="rn">Robot Nr. 1</p>
                <li>Status: Avaliable/Active</li>
            </div>

            <hr class="underlines">

            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="robots" class="iconify" data-icon="mdi:robot-off-outline"></i>
            <div class="robot_txt">
                <p class="rn">Robot Nr. 3</p>
                <li>Status: Unavaliable/Offline</li>
            </div>

            <hr class="underlines">
        </div>

    </div>

</body>

</html>