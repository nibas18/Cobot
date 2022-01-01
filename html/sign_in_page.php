<?php
session_start();
?>
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
    <?php $error_message = ""; ?>

    <div class="content">
        <div class="header_banner"></div>
        <p class="sign_in_p">Sign-in</p>
        <img class="cs_img" src="../images/cleaningstaff_img.png">

        <form class="sign_in" method="POST" action="../backend/loginsystem.php">
            <div class="sign_in_p1">
                <p>+45</p>
                <input class="sign_in_input" name="mobile" type="password" placeholder="Enter mobile phone" required>
            </div>
            <button class="sign_in_btn" name="login">Login</button>
            
            <?php
            if (isset($_SESSION["error"])) {
                $error = $_SESSION["error"];
                echo'<p class="error_text">'. $_SESSION["error"] .'</p>';
                //echo "<span>$error</span>";
            }
            ?>
        </form>

        <div class="line"></div>
    </div>

</body>

</html>
<?php
    unset($_SESSION["error"]);
?>