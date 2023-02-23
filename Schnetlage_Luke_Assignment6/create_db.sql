CREATE DATABASE luke_schnetlage_assignment_db;
USE luke_schnetlage_assignment_db;

CREATE TABLE student (
    studentID int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255),
    GPA DOUBLE(3,2),
    PRIMARY KEY (studentID)
); 

INSERT INTO student(name, email,GPA)
VALUES
    ("PO BLACK","poblack@gmail.com",2.34),
    ("SHIFU HOFFMAN","shifuhoffman@gmail.com",3.98),
    ("TIGRESS JOLIE","tigressjolie@gmail.com",1.34),
    ("JENNIFFER YUH","jenniferyuh@gmail.com",3.21),
    ("OX STORMING","oxstorming@gmail.com",4.00),
    ("MONKEY CHAN","monkeychan@gmail.com",3.10),
    ("VIPER LIU","viperliu@gmail.com",2.84),
    ("MANTIS ROGEN","mantisrogen@gmail.com",2.21),
    ("CRANE CROSS","cranecross@gmail.com",3.02),
    ("OOGWAY KIM","oogway@gmail.com",1.93),
    ("PING HONG","pinghong@gmail.com",3.52);

GRANT SELECT, INSERT, DELETE, UPDATE
ON luke_schnetlage_assignment_db.*
TO lukeweb@localhost
IDENTIFIED BY 'lukechocolate';

