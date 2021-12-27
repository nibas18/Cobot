<?php
$servername = "localhost";
$username = "root";
$password = "";

//Connect to server:
$server_connection = mysqli_connect($servername, $username, $password);

$database_name = "cobot1";
$sql_db = "CREATE DATABASE IF NOT EXISTS $database_name";

//Create a database:
mysqli_query($server_connection, $sql_db);
mysqli_close($server_connection);

//Connect to database:
$database_connection = mysqli_connect($servername, $username, $password, $database_name);

//Create relations:
$sql_table_user = "CREATE TABLE IF NOT EXISTS Users (ID int NOT NULL AUTO_INCREMENT, Personalid int(20) NOT NULL, Fullname varchar(255) NOT NULL, Mobile int NOT NULL, PRIMARY KEY (ID))";
$sql_table_robots = "CREATE TABLE IF NOT EXISTS Tasks(Tasknumber varchar(255) NOT NULL, Taskdescription varchar(255) NOT NULL, PRIMARY KEY(Tasknumber))";
$sql_table_cap = "CREATE TABLE IF NOT EXISTS Robots(Robotnumber varchar(225) NOT NULL, Robotstatus varchar(255) NOT NULL, Tasks varchar(255), PRIMARY KEY(Robotnumber), FOREIGN KEY(Tasks) REFERENCES Tasks(Tasknumber))";
$sql_table_tasks = "CREATE TABLE IF NOT EXISTS Capacity(ID int NOT NULL AUTO_INCREMENT, Charge varchar(225) NOT NULL, Trash varchar(225) NOT NULL, Liquid varchar(225) NOT NULL, Robots varchar(225) NOT NULL, PRIMARY KEY(ID), FOREIGN KEY(Robots) REFERENCES Robots(Robotnumber))";

mysqli_query($database_connection, $sql_table_user);
mysqli_query($database_connection, $sql_table_robots);
mysqli_query($database_connection, $sql_table_cap);
mysqli_query($database_connection, $sql_table_tasks);

mysqli_close($database_connection);

/*
//Insert data into relations:
$sql_insert_user = "INSERT INTO Users (ID, Personalid, Fullname, Mobile) VALUES ('1', '493756', 'Marie Pedersen', '36473888');";
$sql_insert_robots1 = "INSERT INTO Robots (Robotnumber, Robotstatus, Tasks) VALUES ('Robot Nr 1', 'Avaliable/Active', 'Task 1');";
$sql_insert_robots2 = "INSERT INTO Robots (Robotnumber, Robotstatus, Tasks) VALUES ('Robot Nr 3', 'Unavaliable/Offline', 'Task 1');";
$sql_insert_cap1 = "INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ('1', '87%', '10%', '99%', 'Robot Nr 1');";
$sql_insert_cap2 = "INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ('2', '0%', '0%', '0%', 'Robot Nr 3');";
$sql_insert_tasks1 = "INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ('Task 1', 'Cleaning Zone 3');";
$sql_insert_tasks2 = "INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ('Task 2', 'Cleaning Zone 1');";

mysqli_query($database_connection, $sql_insert_user);
mysqli_query($database_connection, $sql_insert_robots1);
mysqli_query($database_connection, $sql_insert_robots2);
mysqli_query($database_connection, $sql_insert_cap1);
mysqli_query($database_connection, $sql_insert_cap2);
mysqli_query($database_connection, $sql_insert_tasks1);
mysqli_query($database_connection, $sql_insert_tasks2);
*/