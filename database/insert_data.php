<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "cobot";

$database_connection = mysqli_connect($servername, $username, $password, $database_name);

$sql_insert_user = "INSERT INTO Users (ID, Personalid, Fullname, Mobile) VALUES ('1', '493756', 'Marie Pedersen', '36473888');";
$sql_insert_tasks1 = "INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ('Task 1', 'Cleaning Zone 3');";
$sql_insert_tasks2 = "INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ('Task 2', 'Cleaning Zone 1');";
$sql_insert_robots1 = "INSERT INTO `robots`(`Robotnumber`, `Robotstatus`, `Tasks`) VALUES ('Robot Nr 1','Avaliable/Active','Task 1')";
$sql_insert_robots2 = "INSERT INTO Robots (Robotnumber, Robotstatus, Tasks) VALUES ('Robot Nr 3', 'Unavaliable/Offline', 'Task 1');";
$sql_insert_cap1 = "INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ('1', '87%', '10%', '99%', 'Robot Nr 1');";
$sql_insert_cap2 = "INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ('2', '0%', '0%', '0%', 'Robot Nr 3');";


mysqli_query($database_connection, $sql_insert_user);
mysqli_query($database_connection, $sql_insert_tasks1);
mysqli_query($database_connection, $sql_insert_tasks2);
mysqli_query($database_connection, $sql_insert_robots1);
mysqli_query($database_connection, $sql_insert_robots2);
mysqli_query($database_connection, $sql_insert_cap1);
mysqli_query($database_connection, $sql_insert_cap2);

mysqli_close($database_connection);
?>