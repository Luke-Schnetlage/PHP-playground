<?php 
	require_once('luke_schnetlage_database.php');
	$studentID = filter_input(INPUT_GET, 'studentID');
	
	$query = "SELECT * FROM student 
				WHERE studentID LIKE :studentID";
	
	$statement = $db->prepare($query);
	$statement->bindValue(':studentID', "%".$studentID."%", PDO::PARAM_STR);
	$statement->execute();
	$student = $statement->fetch();

	$studiD = $student['studentID'];
    $name = $student['name'];
    $email = $student['email'];
    $gpa = $student['GPA'];

    echo ("$studiD|$name|$email|$gpa") ;
    //echo  $student["studentID"] ;
?>

