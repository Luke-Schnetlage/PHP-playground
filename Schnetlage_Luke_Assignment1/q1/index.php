<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->

<?php
//default variables
if (!isset($vehicle_type)) {
	$vehicle_type = '';
}
if (!isset($vehicle_color)) {
	$vehicle_color = '';
}
if (!isset($vehicle_year)) {
	$vehicle_year = '';
}
if (!isset($vehicle_make)) {
	$vehicle_make = '';
}
if (!isset($vehicle_model)) {
	$vehicle_model = '';
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<title>
		Luke Schnetlage's Vehicle Page
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<header>
		<h1>Luke Schnetlage's Vehicle Page</h1>
	</header>
	<main>

		<p>This page will prompt Luke Schnetlage for information on his dream vehicle.</p>
		<br>
		<form method="post" action="index_process.php">
			<div id="data">
				<label>Vehicle Type:</label>
				<input type="text" name="vehicle_type" value="<?php echo htmlspecialchars($vehicle_type); ?>">
				<br>

				<label>Color:</label>
				<input type="text" name="color" value="<?php echo htmlspecialchars($vehicle_color); ?>">
				<br>

				<label>Year:</label>
				<input type="text" name="year" value="<?php echo htmlspecialchars($vehicle_year); ?>">
				<br>

				<label>Make:</label>
				<input type="text" name="make" value="<?php echo htmlspecialchars($vehicle_make); ?>">
				<br>

				<label>Model:</label>
				<input type="text" name="model" value="<?php echo htmlspecialchars($vehicle_model); ?>">
				<br>

			</div>

			<div id="button">
				<label>&nbsp;</label>
				<input type="submit" value="submit">
				<br><br>
			</div>

		</form>
	</main>


</body>


</html>