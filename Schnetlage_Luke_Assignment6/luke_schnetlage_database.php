
<?php
/*
Luke Schnetlage
CSCI 4000-10
11/28/22
*/
//this is self documenting, $username is the username $password the password, ect...
$dsn = 'mysql:host=localhost;dbname=luke_schnetlage_assignment_db';
$username = 'lukeweb';
$password = 'lukechocolate';

try {
	$db = new PDO($dsn, $username, $password);
    //echo "Successful in connecting to database<br>\n";
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	//echo $error_message;
	include('luke_schnetlage_database_error.php');
	exit();
}
?>