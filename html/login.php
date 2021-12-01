<?php
    $db_connection = require_once("../database/db_connection.php");

    if(isset($_POST['login'])) {

        $mobile = $_POST['mobile'];
        if($mobile != null){
            $sql = "SELECT * FROM Users WHERE Mobile ='$mobile'";
            $query_result = mysqli_query($connection, $sql);
            //$row = mysqli_fetch_assoc($query_result);
            $row = mysqli_fetch_array($query_result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($query_result);
            if($count > 0){
                //header("Location: ../html/main_use_page.php");
                header("location: main_use_page.php");
            }else{
                echo "You failed to login. Try Again!";
            }
        }
    }
?>