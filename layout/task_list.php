<script>
    function drag_down_t() {
        document.getElementById("overall_task_list").style.display = "none";
        document.getElementById("overall_menu").style.display = "block"
    }
</script>
<!--Task List!-->
<div id="overall_task_list" class="task_list">
    <hr class="top_line" onclick="drag_down_t()">
    <p class="task_title">Lists of Tasks</p>
    <hr class="underline">
    <div class="scroll_list">
        <?php
        $db_connection = require("../database/db_connection.php");
        //Another Testing:
        $sql = "SELECT * FROM Tasks";
        $query = mysqli_query($db_connection, $sql);
        //$row = mysqli_fetch_assoc($query);
        $count = mysqli_num_rows($query);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($query)) {
                echo '<i id="x" class="iconify" data-icon="bi:x"></i>';
                echo '<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>';
                echo '<div class="task_txt">';
                echo '<p class="rt">' . $row['Tasknumber'] . ':</p>';
                echo '<li>' . $row['Taskdescription'] . '</li>';
                echo '</div>';
                echo '<hr class="underlines">';
            }
        }
        ?>
    </div>
</div>