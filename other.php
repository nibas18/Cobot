<?php
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


        <!--Task List
        <div id="overall_task_list" class="task_list">
            <hr class="top_line">
            <p class="task_title">Lists of Tasks</p>

            <hr class="underline">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 1:</p>
                <li>Cleaning Zone 3</li>
            </div>

            <hr class="underlines">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 2:</p>
                <li>Cleaning Zone 1</li>
            </div>

            <hr class="underlines">
            <i id="x" class="iconify" data-icon="bi:x"></i>
            <i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            <div class="task_txt">
                <p class="rt">Task 3:</p>
                <li>Cleaning Floor in Zone 1</li>
            </div>

            <hr class="underlines">
        </div> !-->