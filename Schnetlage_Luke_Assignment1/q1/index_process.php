<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->
<?php
$vehicle_type = filter_input(INPUT_POST,'vehicle_type',FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle_color = filter_input(INPUT_POST,'color',FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle_year = filter_input(INPUT_POST,'year',FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle_make = filter_input(INPUT_POST,'make',FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle_model = filter_input(INPUT_POST,'model',FILTER_SANITIZE_SPECIAL_CHARS);
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

<main>
<h1>Luke Schnetlage's Vehicle Page</h1>

<h4>This page displays the information of Luke Schnetlage's dream vehicle</h4>

<label>Vehicle Type:</label>&nbsp;
<span><?php echo($vehicle_type)?></span>
<br>
<label>Color</label>&nbsp;
<span><?php echo($vehicle_color)?></span>
<br>
<label>Year:</label>&nbsp;
<span><?php echo($vehicle_year)?></span>
<br>
<label>Make:</label>&nbsp;
<span><?php echo($vehicle_make)?></span>
<br>
<label>Model:</label>&nbsp;
<span><?php echo($vehicle_model)?></span>
<br>
<br>
<a href="index.php">back to first page</a>

</main>


</body>


</html>