<!-- 
Luke Schnetlage
CSCI 4000-10
10/30/22
-->
<?php 
$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$gender = filter_input(INPUT_POST, 'gender');


//validate input
if ($majorID == null || $majorID == false ||
        $fname == null || $fname == false || 
        $lname == null || $lname == false ||
        $gender == null || $gender == false)
{
	$error = "Invalid student data. Check all fields and try again.";
	//echo $error ."<br>";
	include('luke_schnetlage_error.php');
} else {
        require_once('luke_schnetlage_database.php');
	$query = 'INSERT INTO student
                 (majorID, firstName, lastName, gender)
              VALUES
                 (:majorID, :firstName, :lastName, :gender)';
    $statement = $db->prepare($query);
    $statement->bindValue(':majorID', $majorID);
    $statement->bindValue(':firstName', $fname);
    $statement->bindValue(':lastName', $lname);
    $statement->bindValue(':gender', $gender);
    $statement->execute();
    $statement->closeCursor();
	include('index.php');
}
