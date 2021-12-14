<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="cobot";

    $db_connection = mysqli_connect($servername, $username, $password, $database);

    if($db_connection){
        echo "You have successfully connected to the database!";
    }else{
        echo "Error! You have failed to connect to the database. Try Again!";
        die("Failure log: " . mysqli_connect_error());
    }

    //Another Testing:
    $sql = "SELECT * FROM Tasks";
    $query = mysqli_query($db_connection, $sql);
    //$row = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if($count > 0){
        while($row = mysqli_fetch_array($query)){
            echo '<hr class="underline">';
            echo '<i id="x" class="iconify" data-icon="bi:x"></i>';
            echo '<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>';
            echo '<div class="task_txt">';
            echo '<p class="rt">' . $row['Tasknumber']. ':</p>';
            echo '<li>' . $row['Taskdescription']. '</li>';
            echo '</div>';
        }
    }




    //Testing:
    /*
    $sql = "SELECT * FROM Users";
    $query = mysqli_query($db_connection, $sql);
    $row = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) > 0){
        if($row){
            echo "<br> ID: " . $row["ID"]. "<br>";
            echo "Personalid: " . $row["Personalid"]. "<br>";
            echo "Fullname: " . $row["Fullname"]. "<br>";
            echo "Mobile: " . $row["Mobile"]. "<br>";
            header("Location: ../index.php");
        }
    }else{
        echo "There are no results in the data-table.";
    }*/
?>