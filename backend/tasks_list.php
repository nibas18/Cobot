<?php
    require("../database/db_connection.php");

    $sql = "SELECT * FROM Tasks";
    $query = mysqli_query($db_connection, $sql);
    $count = mysqli_num_rows($query);
    if($count > 0){
        while($row = mysqli_fetch_array($query)){
        echo '
        <div class="each_task">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">' . $row['Tasknumber']. ':</p>
                <li>' . $row['Taskdescription']. '</li>
            </div>
        </div>
        <hr class="underlines">';

            /*
            echo '<i id="x" class="iconify" data-icon="bi:x"></i>';
            echo '<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>';
            echo '<div class="task_txt">';
            echo '<p class="rt">' . $row['Tasknumber']. ':</p>';
            echo '<li>' . $row['Taskdescription']. '</li>';
            echo '</div>';
            echo '<hr class="underlines">';
            echo '</div>';*/
        }
    }
    mysqli_close($db_connection);
?>