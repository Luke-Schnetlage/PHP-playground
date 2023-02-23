<?php 

$dsn = 'mysql:host=localhost;dbname=kungfu_panda_shop';
$username = 'web_user';
$password = 'shifu88';

try {
	$db = new PDO($dsn, $username, $password);
	//echo "Successful in connecting to database<br>\n";
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	//echo $error_message;
	include('../errors/database_error.php');
	exit();
}

?>