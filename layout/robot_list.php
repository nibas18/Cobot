<script>
    function drag_down_r() {
        document.getElementById("overall_robot_list").style.display = "none";
        document.getElementById("overall_menu").style.display = "block"
    }
    function sendStatus($robotnr){
        window.location.href='../html/robot_status.php?Robots="$robotnr"';
    }
</script>
<!--Robot List-->
<div id="overall_robot_list" class="robot_list">
    <hr class="top_line" onclick="drag_down_r()">
    <p class="robot_title">Lists of Robots</p>
    <hr class="underline">
    <div class="scroll_list_r">
        <?php
       
        $db_connection = require("../database/db_connection.php");
        $sql = "SELECT * FROM Robots";
        $query = mysqli_query($db_connection, $sql);
        //$row = mysqli_fetch_assoc($query);
        $count = mysqli_num_rows($query);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $nr = $row['Robotnumber'];
                echo '<i id="robots"  class="iconify" data-icon="mdi:robot-excited-outline"><a href="../html/robot_status.php?Robots='. $nr.'"></a></i>';
                echo '<div class="robot_txt">';
                echo '<p class="rn">' . $row['Robotnumber'] . ':</p>';
                echo '<li>Status: ' . $row['Robotstatus'] . '</li>';
                echo '</div>';
                echo '<hr class="underlines">';
            }
        }

        ?>
    </div>
</div>