<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php
function get_students_by_major($major_id){
	global $db;
	//Get products for selected category
	$query = "SELECT * FROM student WHERE majorID = :major_id ORDER BY studentID";
	$statement = $db->prepare($query);
	$statement->bindValue(':major_id', $major_id);
	$statement->execute();
	$students = $statement->fetchAll();
	$statement->closeCursor();
	return $students;
}

function delete_student($student_id){
	global $db;
	//Get products for selected category
	if ($student_id == NULL || $student_id == FALSE){
		$error_message = "Could not find student by ID";
		include('../errors/luke_schnetlage_database_error.php');
	} else{
		$query = "DELETE FROM student WHERE studentID = :student_id";
		$statement = $db->prepare($query);
		$statement->bindValue(':student_id', $student_id);
		$statement->execute();
		$statement->closeCursor();
	}
	}

?>