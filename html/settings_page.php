<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <link rel="stylesheet" href="../css_style/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</head>

<body>

    <div class="content">
        <div class="header_banner"></div>
        <p class="settings_title">Settings</p>
        <i id="back_arrow" class="iconify" onclick="javascript:history.go(-1)" data-icon="eva:arrow-back-outline"></i>

        <div class="list_settings">
            <div class="account_div">
                <i id="arrow_right" class="iconify" data-icon="dashicons:arrow-right-alt2"></i>
                <i id="user" class="iconify" data-icon="ci:user"></i>
                <p>Account</p>
            </div>

            <div class="notification_div">
                <i id="notification_bell" class="iconify" data-icon="fontisto:bell"></i>
                <i id="arrow_right_n" class="iconify" data-icon="dashicons:arrow-right-alt2"></i>
                <p>Notification</p>
            </div>

            <div class="security_div">
                <i id="arrow_right" class="iconify" data-icon="dashicons:arrow-right-alt2"></i>
                <i id="security" class="iconify" data-icon="akar-icons:lock-on"></i>
                <p>Security</p>
            </div>

            <div class="customer_div">
                <i id="arrow_right" class="iconify" data-icon="dashicons:arrow-right-alt2"></i>
                <i id="customer" class="iconify" data-icon="bx:bx-support"></i>
                <p>Customer Support</p>
            </div>

            <div class="about_div">
                <i id="arrow_right" class="iconify" data-icon="dashicons:arrow-right-alt2"></i>
                <i id="about" class="iconify" data-icon="grommet-icons:circle-question"></i>
                <p>About Us</p>
            </div>

            <div class="logout_div">
                <a href="../backend/logout_system.php">
                    <i id="logout" class="iconify" data-icon="entypo:log-out"></i>
                    <p>Log Out</p>
                </a>
            </div>

            <div class="line"></div>
        </div>

</body>

</html>