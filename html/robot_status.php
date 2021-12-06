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
        require("../backend/robot_status_info.php");
    ?>
    <div class="content">
        <?php require("../layout/header.php") ?>
        
        <div class="background_color"></div>
        <img class="robots_img" src="../images/robots_img.png" width="337" height="227">
        <?php
            include("../layout/footer.php");  
        ?>
    </div>

    </body>
</html>