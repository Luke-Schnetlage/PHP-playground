/*
Luke Schnetlage
10/30/2022
CSCI 4000-10
*/
CREATE DATABASE luke_schnetlage_student_db;
USE luke_schnetlage_student_db;

CREATE TABLE major (
    majorID int(11) NOT NULL AUTO_INCREMENT,
    majorName  varchar(255),
    PRIMARY KEY (majorID)
); 

CREATE TABLE student (
    studentID int(11) NOT NULL AUTO_INCREMENT,
    majorID int(11) NOT NULL,
    firstName varchar(255),
    lastName varchar(255),
    gender varchar(255),
    PRIMARY KEY (studentID),
    FOREIGN KEY (majorID) REFERENCES major(majorID)
); 


INSERT INTO major(majorName)
VALUES
    ("Computer Science"),
    ("English"),
    ("Math"),
    ("History"),
    ("German"),
    ("Bussiness")
;


INSERT INTO student(majorID, firstName, lastName, gender)
VALUES
    (1,"Luke","Schnetlage","M"),
    (2,"Alice","White","F"),
    (3,"Jemal","King","M"),
    (4,"May","Digby","NB"),
    (5,"TESTF","TESTL","OTHER"),
    (6,"Dargo","Jackson","NB")
;


GRANT SELECT, INSERT, DELETE, UPDATE
ON luke_schnetlage_student_db.*
TO lukeschnetlage1@localhost
IDENTIFIED BY 'lukeisgreat';

