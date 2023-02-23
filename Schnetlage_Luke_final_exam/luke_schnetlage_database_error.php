<!-- 
Luke Schnetlage
CSCI 4000-10
12/5/22
-->
<!--Basic error message page, 
takes an error from database, prints it here -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Luke Schnetlage's secret calculator</title>
	<meta charset="utf-8">
	<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>Luke Schnetlage's secret calculator</h1>
	</header>

	<main>
		<h1>Database Error</h1>
		<p class="error">Error message: <?php echo $error_message; ?></p>


		<br><br>
		<p><a href="index.php">Return to home page</a></p>

		<footer>
			<p class="right">
				&copy; <?php echo date("Y"); ?> Luke Schnetlage's kung fu school
			</p>
		</footer>
	</main>


</body>

</html>