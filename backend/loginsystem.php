<?php
    session_start();
    $db_connection = require_once("../database/db_connection.php");
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
            $Personalid = $row['Personalid'];
            $_SESSION['Personalid'] = $Personalid;
            //$row["Personalid"] = $_SESSION["Personalid"];
            header("location: ../html/main_use_page.php");
        }else{
            $error = "Error the number is Invalid";
            $_SESSION["error"] = $error;
            header("location: ../html/sign_in_page.php");
        }
    }
    mysqli_close($db_connection);
?>