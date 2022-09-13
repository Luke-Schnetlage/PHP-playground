<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->
<?php
if (!isset($age)) {
	$age = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Luke Schnetlage's Soccer Ticket Price
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<header>
		<h1>Luke Schnetlage's Soccer Ticket Price</h1>
	</header>
	<main>

        <p>This page will decide the cost of Luke's soccer ticket price based on his.</p>
        <ul>
            <li>Ages under 5 cost $2.00</li>
            <li>Ages between 5 and 15 cost $6.00</li>
            <li>Ages above 15 cost $8.00</li>
        </ul>

		<br>
        <h3>Please enter Luke's age:</h3>
		<form method="post" action="index_process.php">
			<div id="data">
				<label></label>
				<input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>">
                &nbsp; years old
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