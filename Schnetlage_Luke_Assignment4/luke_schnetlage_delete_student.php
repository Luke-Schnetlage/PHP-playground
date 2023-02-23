<!-- 
Luke Schnetlage
CSCI 4000-10
10/30/22
-->
<?php
//this takes a studentID from index  
//correlated to which "delete" button was pressed.
//as long as an id was passed, the student is removed using their id


//connect to the "luke_schnetlage_assignment_db" database
require_once('luke_schnetlage_database.php');

$studentID = filter_input(INPUT_POST, 'studentID');


if ($studentID != false || $studentID != NULL) {
    $query = 'DELETE FROM student WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentID);
    $statement->execute();
    $statement->closeCursor();
}
include('index.php');
?>