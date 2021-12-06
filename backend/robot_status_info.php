<?php
    require_once("../database/db_connection.php");
    
    $sql = "SELECT * FROM Capacity";
    $query = mysqli_query($db_connection, $sql);
    $count = mysqli_num_rows($query);
    if($count > 0){
        while($row = mysqli_fetch_array($query)){
            echo '<div class="robot_cap_overview">';
            echo '<div class="battery_div">';
            echo '<i id="battery" class="iconify" data-icon="ph:battery-charging-bold"></i>';
            echo '<p>' . $row['Charge']. '</p>';
            echo '</div>';
            echo '<div class="trash_div">';
            echo '<i id="trash" class="iconify" data-icon="bx:bx-trash"></i>';
            echo '<p>' . $row['Trash']. '</p>';
            echo '</div>';
            echo '<div class="liquid_div">';
            echo '<i id="liquid" class="iconify" data-icon="carbon:rain-drop"></i>';
            echo '<p>' . $row['Liquid']. '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
    mysqli_close($db_connection);
?>