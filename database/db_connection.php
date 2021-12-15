<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="cobot";

    $db_connection = mysqli_connect($servername, $username, $password, $database);

    if($db_connection){
        //echo "You have successfully connected to the database!";
    }else{
        echo "Error! You have failed to connect to the database. Try Again!";
        die("Failure log: " . mysqli_connect_error());
    }
    return $db_connection;  
?>