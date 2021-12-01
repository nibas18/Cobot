<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Use Page</title>
        <link rel="stylesheet" href="../css_style/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    </head>
    <body>

    <div class="content">
        <div class="header">
            <i id="back" class="iconify" data-icon="eva:arrow-ios-back-outline"></i>
            <i id="notification" class="iconify" data-icon="carbon:notification-new"></i>
            <i id="menu" class="iconify" data-icon="gg:menu-grid-o"></i>
        </div>

        <div class="btn_list">
            <button class="schedule_btn">
                <i class="iconify" data-icon="healthicons:i-schedule-school-date-time"></i>
                <div class="divide"></div>
                <p>Schedule/Clock</p>
            </button>

            <button class="caf_btn" onclick="javascript:location.href='cafeteria_map.php'">
                <i class="iconify" data-icon="mdi:robot"></i>
                <div class="divide"></div>
                <p>Cafeteria and Robots</p>
            </button>

            <button class="chat_btn">
                <i class="iconify" data-icon="bi:chat-dots"></i>
                <div class="divide"></div>
                <p>Chat</p>
            </button>

            <button class="news_btn">
                <i class="iconify" data-icon="heroicons-outline:chat-alt-2"></i>
                <div class="divide"></div>
                <p>News Board</p>
            </button>
        </div>
        
        <div class="line"></div>
    </div>

    </body>
</html>