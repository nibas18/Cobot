<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign In Page</title>
        <link rel="stylesheet" href="../css_style/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
    </head>
    <body>

    <div class="content">
        <div class="header_banner"></div>
        <p class="sign_in_p">Sign-in</p>
        <img class="cs_img" src="../images/cleaningstaff_img.png">
        
        <form class="sign_in" method="POST" action="../database/db_connection.php">
            <div class="sign_in_p1">
                <p>+45</p>
                <input class="sign_in_input" name="mobile" type="password" placeholder="Enter mobile phone" required>
            </div>
            <button class="sign_in_btn" name="login">Login</button>
        </form>
        
        <div class="line"></div>
    </div>

    </body>
</html>