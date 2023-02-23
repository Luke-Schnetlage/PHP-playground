<!-- 
Luke Schnetlage
CSCI 4000-10
10/30/22
-->
<?php
//connect to the "luke_schnetlage_assignment_db" database
require_once('luke_schnetlage_database.php');


if (!isset($majorID)) {
	$majorID = filter_input(INPUT_GET, 'majorID', FILTER_VALIDATE_INT);
	if ($majorID == NULL || $majorID == FALSE) {
		$majorID = 1;
	}
}

//this collects the student table and stores it in $students
$query = 'SELECT * FROM student WHERE majorID = :majorID';
$statement = $db->prepare($query);
$statement->bindValue(':majorID', $majorID);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();



$query = 'SELECT * FROM major ORDER BY majorID';
$statement = $db->prepare($query);
$statement->execute();
$majors = $statement->fetchAll();
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

		<aside>
			<h2>Majors:</h2>
			<nav>
				<ul>
					<?php
					foreach ($majors as $major) :
					?>
						<li>
							<a href="?majorID=<?php echo ($major['majorID']); ?>
								"><?php echo $major['majorName']; ?>
							</a>
						</li>
					<?php
					endforeach;
					?>
				</ul>
			</nav>
		</aside>

		<h2>
			<?php
			echo $majors[$majorID - 1]['majorName'];
			?>
		</h2>

		<table style="width: 100%">

			<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th></th>
			</tr>
			<?php
			foreach ($students as $student) { //begin foreach 
				//this just loops through the student table and prints the values to a table
			?>
				<tr>
					<td><?php echo $student['studentID']; ?></td>
					<td><?php echo $student['firstName']; ?></td>
					<td><?php echo $student['lastName']; ?></td>
					<td><?php echo $student['gender']; ?></td>
					<td>
						<form action="luke_schnetlage_delete_student.php" method="post">
							<!--just a delete button, posts ID -->
							<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>">
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
		<br>


		<footer>
			<p class="right">
				&copy; <?php echo date("Y"); ?> Luke Schnetlage's kung fu school
			</p>
		</footer>
	</main>


</body>

</html>