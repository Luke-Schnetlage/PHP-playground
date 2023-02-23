
CREATE DATABASE luke_schnetlage_final_db;
USE luke_schnetlage_final_db;

CREATE TABLE coordinate (
    number int(11) NOT NULL AUTO_INCREMENT,
    x decimal(10,2) NOT NULL,
    y decimal(10,2) NOT NULL,
    PRIMARY KEY (number)
); 


GRANT SELECT, INSERT, DELETE, UPDATE
ON luke_schnetlage_final_db.*
TO lukeexam@localhost
IDENTIFIED BY 'lukedonut';

