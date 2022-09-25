<?php
$dsn = 'mysql:host=localhost;dbname=kungfu_panda_shop';
$username = 'web_user';
$password = 'shifu88';#corect pass is shifu88

try {
	$db = new PDO($dsn,$username,$password);
	//echo "Sucscessful in conecting to database<br>\n";
} catch (PDOException $e){
	$error_message = $e->getMessage();
	//echo $error_message;
	include('eg008b_database_error.php');
	exit();
}



?>