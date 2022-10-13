<!-- 
Luke Schnetlage
CSCI 4000-10
10/9/22
-->
<?php 
//takes a name and email from add_student_form, 
//makes sure they're not null, and adds them to the database.

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

//validate input
if ($name == null || $email == false )
{
	$error_message = "Invalid student data. Check all fields and try again.";
	include('luke_schnetlage_database_error.php');
} else {
	require_once('luke_schnetlage_database.php');
	$query = 'INSERT INTO student
                 (name , email)
              VALUES
                 (:name, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
	include('index.php');
}
?>