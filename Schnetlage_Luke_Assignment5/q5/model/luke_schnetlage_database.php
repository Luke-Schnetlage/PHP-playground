<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php

$dsn = 'mysql:host=localhost;dbname=luke_schnetlage_student_db';
$username = 'lukeschnetlage1';
$password = 'lukeisgreat';

try {
	$db = new PDO($dsn, $username, $password);
	//echo "Successful in connecting to database<br>\n";
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	//echo $error_message;
	include('../errors/luke_schnetlage_database_error.php');
	exit();
}

?>