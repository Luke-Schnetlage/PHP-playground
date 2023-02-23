<!-- 
Luke Schnetlage
CSCI 4000-10
11/28/22
-->


<?php
/*
Takes a var $GPA, collects all students with a GPA >= $GPA, returns them in an array
*/
require_once('luke_schnetlage_database.php');
//function getStudentsByGPA($GPA){
$GPA = filter_input(INPUT_GET, 'GPA');
global $db;
$query = "SELECT * FROM student WHERE GPA >= :GPA ORDER BY studentID";
$statement = $db->prepare($query);
$statement->bindValue(':GPA', $GPA);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();
//return $students;
//}
?>

<section>
	<!-- display a table of students -->
	<h2></h2>
	<table>
		<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>GPA</th>
		</tr>
		<?php foreach ($students as $student) : ?>
			<tr>
				<td><?php echo $student['studentID']; ?></td>
				<td><?php echo $student['name']; ?></td>
				<td><?php echo $student['email']; ?></td>
				<td><?php echo number_format($student['GPA'], 2, '.', ""); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</section>