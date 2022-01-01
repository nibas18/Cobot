CREATE DATABASE cobot;
USE cobot;

CREATE TABLE Users (
    ID int NOT NULL AUTO_INCREMENT,
    Personalid int(20) NOT NULL,
    Fullname varchar(255) NOT NULL,
    Mobile int NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE Tasks(
    Tasknumber varchar(255) NOT NULL,
    Taskdescription varchar(255) NOT NULL,
    PRIMARY KEY(Tasknumber)
);
CREATE TABLE Robots( 
    Robotnumber varchar(225) NOT NULL, 
    Robotstatus varchar(255) NOT NULL, 
    Tasks varchar(255), 
    PRIMARY KEY(Robotnumber), 
    FOREIGN KEY(Tasks) REFERENCES Tasks(Tasknumber) 
);

CREATE TABLE Capacity( 
    ID int NOT NULL AUTO_INCREMENT, 
    Charge varchar(225) NOT NULL, 
    Trash varchar(225) NOT NULL, 
    Liquid varchar(225) NOT NULL, 
    Robots varchar(225) NOT NULL, 
    PRIMARY KEY(ID), 
    FOREIGN KEY(Robots) REFERENCES Robots(Robotnumber) 
);

/*Inserting new data into each relation*/
INSERT INTO Users (ID, Personalid, Fullname, Mobile) VALUES ("1", "493756", "Marie Pedersen", "36473888");

INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ("Task 1", "Cleaning Zone 3");
INSERT INTO Tasks (Tasknumber, Taskdescription) VALUES ("Task 2", "Cleaning Zone 1");

INSERT INTO Robots (Robotnumber, Robotstatus, Tasks) VALUES ("Robot Nr 1", "Avaliable/Active", "Task 1");
INSERT INTO Robots (Robotnumber, Robotstatus, Tasks) VALUES ("Robot Nr 3", "Unavaliable/Offline", "Task 1");

INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ("1", "87%", "10%", "99%", "Robot Nr 1");
INSERT INTO Capacity (ID, Charge, Trash, Liquid, Robots) VALUES ("2", "0%", "0%", "0%", "Robot Nr 3");