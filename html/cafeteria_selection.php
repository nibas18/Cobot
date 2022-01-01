<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cafeteria Selection</title>
        <link rel="stylesheet" href="../css_style/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <script src="../backend/selection.js"></script>
    </head>
    <body>

    <div class="content">
        <div class="header">
            <i id="back" class="iconify" data-icon="eva:arrow-ios-back-outline"></i>
        </div>
        <div class="select_caf_p"><p>Select a Cafeteria</p></div>
        
        <div class="tek_caf">
            <img id="tek" value="tek_val" class="tek_img" onclick="tekcafFunction()" src="../images/tek_cafeteria_img.png" width="167px" height="122px">
            <p>Tek-Cafeteria</p>
        </div>
        <div class="big_caf">
            <img id="bg" class="big_img" onclick="bigcafFunction()" src="../images/big_cafeteria_img.png" width="167px" height="122px">
            <p>The Big Cafeteria</p>
        </div>
        <div class="small_caf">
            <img id="sm" class="small_img" onclick="smallcafFunction()" src="../images/small_cafeteria_img.png" width="167px" height="122px">
            <p>The Small Cafeteria</p>
        </div>
        
        <!--<button class="select_btn" onclick="selectCafeteria()">Select</button>!-->

        
        <div class="line"></div>
    </div>

    </body>
</html>