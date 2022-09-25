<!--
Luke Schnetlage
9/25/2022
CSCI 4000
Assignment2
 -->
<?php
//these statements "remember" what the user input if the page is refreshed
if (!isset($hourly_pay)){
	$hourly_pay = '';
}
if (!isset($hours_worked)){
	$hours_worked = '';
}
if (!isset($dependents)){
	$dependents = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Luke Schnetlage's Employee Net Pay
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">


</head>

<body>

	<main>
		<header>
			<h1>Luke Schnetlage's Employee Net Pay</h1>
		</header>


		<p>This page will prompt Luke Schnetlage to calculate an employee's net pay.</p>
		<p>Please enter:</p>
		<ul>
			<li>Employee's hourly rate of pay;</li>
			<li>Number of hours worked that week;</li>
			<li>Number of dependents employee has.</li>
		</ul>
		<br>
		<!-- from uses the get method, values are auto-filled if variables are already known -->
		<form method="get" action="index_process.php">
			<div id="data">
				<label>Hourly pay rate:</label>
				<input type="number" step="0.01" name="hourly_pay" value="<?php echo htmlspecialchars($hourly_pay); ?>">
				&nbsp; dollars
				<br>

				<label>Number of hours worked in a week:</label>
				<input type="number" name="hours_worked" value="<?php echo htmlspecialchars($hours_worked); ?>">
				&nbsp; hours
				<br>

				<label>Number of dependents claimed:</label>
				<input type="number" name="dependents" value="<?php echo htmlspecialchars($dependents); ?>">
				&nbsp; dependents
				<br>

			</div>

			<div id="button">
				<label>&nbsp;</label>
				<input type="submit" value="calculate">
				<br><br>
			</div>

		</form>
	</main>


</body>

</html>