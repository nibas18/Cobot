<?php
    require("../database/db_connection.php");

    //Login System:    
    if(isset($_POST['login'])) {
        $mobile = $_POST['mobile'];
        $sql = "SELECT * FROM Users WHERE Mobile ='$mobile'";
        $query_result = mysqli_query($db_connection, $sql);
        //$row = mysqli_fetch_assoc($query_result);
        $row = mysqli_fetch_array($query_result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($query_result);
        if($count > 0){
            //header("Location: ../html/main_use_page.php");
            header("location: ../html/main_use_page.php");
        }else{
            echo "You failed to login. Try Again!";
        }
    }
    mysqli_close($db_connection);
?>