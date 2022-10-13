<!-- 
Luke Schnetlage
CSCI 4000-10
10/9/22
-->
<?php
//connect to the "luke_schnetlage_assignment_db" database
require_once('luke_schnetlage_database.php');

//this collects the student table and stores it in $students
$query = 'SELECT * FROM student';
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
		<h1>Luke Schnetlage's kung fu school - students</h1>
	</header>

	<main>
		<h1>Student List: </h1>

		<table style="width: 100%">

			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Email</th>
				<th></th>
			</tr>
			<?php
			foreach ($students as $student) { //begin foreach 
				//this just loops through the student table and prints the values to a table
			?>
				<tr>
					<td><?php echo $student['studentID']; ?></td>
					<td><?php echo $student['name']; ?></td>
					<td><?php echo $student['email']; ?></td>
					<td>
						<form action="luke_schnetlage_delete_student.php" method="post">
							<!--just a delete button, posts name and ID -->
							<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>">
							<input type="hidden" name="name" value="<?php echo $student['name']; ?>">
							<input type="submit" value="Delete">
						</form>
					</td>
				</tr>
			<?php
			}	//end foreach
			?>
		</table>
		<br>
		<p><a href="luke_schnetlage_add_student_form.php">Add student</a></p>


		<footer>
			<p class="right">
				&copy; <?php echo date("Y"); ?> Luke Schnetlage's kung fu school
			</p>
		</footer>
	</main>


</body>

</html>