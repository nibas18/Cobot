<?php
$Robot_Id =$_GET['Chosen_Id'];
$db_connection = require("../database/db_connection.php");
$sql = "SELECT * FROM Capacity WHERE Robots='$Robot_Id'";
$query = mysqli_query($db_connection, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        $Robot_Id = $row['Robots'];
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
mysqli_free_result($query);
mysqli_close($db_connection);
?>