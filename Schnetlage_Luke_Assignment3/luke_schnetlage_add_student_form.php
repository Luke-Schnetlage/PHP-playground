<!-- 
Luke Schnetlage
CSCI 4000-10
10/9/22
-->

<?php
//connect to the "luke_schnetlage_assignment_db" database
require_once('luke_schnetlage_database.php');

//collect "student" table and store it in $students
$query = 'SELECT *
          FROM student
          ORDER BY studentID';
$statement = $db->prepare($query);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Luke Schnetlage's kung fu school</title>
	<meta charset="utf-8">
	<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>Luke Schnetlage's kung fu school - Add Student</h1>
	</header>

	<main>
		<!--Form to add a new student, takes name and email, student ID is auto incremented, uses post-->
		<h1>Add Student</h1> 
		<form method="post" action="luke_schnetlage_add_student.php" id="add_student_form">
			<label>Name:</label>
			<input name="name" type="text" >
			<br><br>
			<label>Email:</label>
			<input name="email" type="text" >
			<br><br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Student">
		</form>
		<br>
		<p><a href="index.php">View All Students</a></p>

		<footer>
			<p class="right">
				&copy; <?php echo date("Y"); ?> Luke Schnetlage's kung fu school
			</p>
		</footer>
	</main>



</body>

</html>