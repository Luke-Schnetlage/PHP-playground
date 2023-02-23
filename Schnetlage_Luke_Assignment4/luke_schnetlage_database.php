<!-- 
Luke Schnetlage
CSCI 4000-10
10/30/22
-->
<?php
//this is self documenting, $username is the username $password the password, ect...
$dsn = 'mysql:host=localhost;dbname=luke_schnetlage_student_db';
$username = 'lukeschnetlage1';
$password = 'lukeisgreat';

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