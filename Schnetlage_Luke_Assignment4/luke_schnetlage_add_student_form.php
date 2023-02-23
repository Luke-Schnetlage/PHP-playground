<!-- 
Luke Schnetlage
CSCI 4000-10
10/30/22
-->
<?php
require_once('luke_schnetlage_database.php');
//get all categories
$query = 'SELECT *
          FROM major
          ORDER BY majorID';
$statement = $db->prepare($query);
$statement->execute();
$majors = $statement->fetchAll();
$statement->closeCursor();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Luke Schnetlage's kung fu school - Add Student</title>
	<meta charset="utf-8">
	<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>Luke Schnetlage Kungfu Panda - Add Student</h1>
	</header>

	<main>
		<h1>Add Product</h1>
		<br>
		<form method="post" action="luke_schnetlage_add_student.php" id="add_product_form">
			<label>Major:</label>
			<select name="majorID">
				<?php foreach ($majors as $major) : ?>
					<option value="<?php echo $major['majorID']; ?>"><?php echo $major['majorName']; ?></option>
				<?php endforeach; ?>
			</select>
			<br><br>
			<label>First Name:</label>
			<input name="fname" type="text">
			<br><br>
			<label>Last Name:</label>
			<input name="lname" type="text">
			<br><br>
			<label>Gender:</label>
			<select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Non-binary">Non-binary</option>
				<option value="Prefer not to say">Prefer not to say</option>
			</select>
			<br><br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Student">
		</form>
		<p><a href="index.php">View All Students</a></p>
	

	<footer>
		<p class="right">

			&copy; <?php echo date("Y"); ?> Luke Schnetlage's kung fu school
		</p>
	</footer>
	</main>
</body>

</html>