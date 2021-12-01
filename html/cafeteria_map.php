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

    </head>
    <body>
    <div class="content">
        <div class="header">
            <i id="back" class="iconify" data-icon="eva:arrow-ios-back-outline"></i>
            <i id="notification" class="iconify" data-icon="carbon:notification-new"></i>
            <i id="menu" class="iconify" data-icon="gg:menu-grid-o"></i>
        </div>
        <div class="wrapper_background_img"></div>
        
        <div class="map_caf">
            <div class="map_location"></div>
        </div>

        <!--Below Menu-->
        <div id="overall_menu" class="below_menu">
            <i id="tasks" onclick="taskFunction()" class="iconify" data-icon="fluent:tasks-app-28-regular"></i>
            <i id="c_robots" onclick="robotFunction()" class="iconify" data-icon="mdi:robot-industrial"></i>
            <i id="zones" class="iconify" data-icon="carbon:map"></i>
            <i id="more" class="iconify" data-icon="fluent:more-circle-32-filled"></i>
        </div>
        
        <!--Task List-->
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
        </div>

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