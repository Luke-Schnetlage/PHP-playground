CREATE DATABASE luke_schnetlage_assignment_db;
USE luke_schnetlage_assignment_db;

CREATE TABLE student (
    studentID int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255),
    PRIMARY KEY (studentID)
); 

INSERT INTO student(name, email)
VALUES
    ("PO BLACK","poblack@gmail.com"),
    ("SHIFU HOFFMAN","shifuhoffman@gmail.com"),
    ("TIGRESS JOLIE","tigressjolie@gmail.com"),
    ("JENNIFFER YUH","jenniferyuh@gmail.com"),
    ("OX STORMING","oxstorming@gmail.com"),
    ("MONKEY CHAN","monkeychan@gmail.com"),
    ("VIPER LIU","viperliu@gmail.com"),
    ("MANTIS ROGEN","mantisrogen@gmail.com"),
    ("CRANE CROSS","cranecross@gmail.com"),
    ("OOGWAY KIM","oogway@gmail.com"),
    ("PING HONG","pinghong@gmail.com");

GRANT SELECT, INSERT, DELETE, UPDATE
ON luke_schnetlage_assignment_db.*
TO lukeweb@localhost
IDENTIFIED BY 'lukechocolate';

