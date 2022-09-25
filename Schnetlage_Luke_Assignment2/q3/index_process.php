<!--
Luke Schnetlage
9/25/2022
CSCI 4000
Assignment2
 -->
<?php
//variable initialization, post method
$row = filter_input(INPUT_POST, 'row', FILTER_VALIDATE_INT);
$column = filter_input(INPUT_POST, 'column', FILTER_VALIDATE_INT);

/*
This generates 3 string variables, 1 for each style of loop
each variable is echoed in the main body
*/

//nested for loop, each item is just "F"
$forloopOutput = "";
for ($i = 0; $i < $row; $i++) {
	for ($j = 0; $j < $column; $j++) {
		$forloopOutput .= "F";
	}
	$forloopOutput .= "<br>";
}

//nested while loop, each item is the phrase "W,row$counteri,col$counterj;"
//counteri and counterj are just counting variables to keep track of row and column location

$nestedwhileOutput = "";
$counteri = 0;
while ($counteri < $row) {
	$counterj = 0;
	while ($counterj < $column) {
		$nestedwhileOutput .= "W,row".($counteri+1).",col".($counterj+1).";";
		$counterj++;
	}
	$nestedwhileOutput .= "<br>";
	$counteri++;
}

//nested do..while loop, each item is the phrase "$counteri x $counterj = . ($counteri * $counterj).;"
//counteri and counterj are reset and reused for the same purpose as the while loop above
$counteri = 1;
$nesteddowhileOutput = "";
do {
	$counterj = 1;
	do {
		$nesteddowhileOutput .= "$counteri x $counterj = " . ($counteri * $counterj) . ";";
		$counterj++;
	} while ($counterj <= $column);
	$nesteddowhileOutput .= "<br>";
	$counteri++;
} while ($counteri <= $row);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Luke Schnetlage's Kung Fu Panda Po Magic Rectangle
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">


</head>

<body>

	<header>
		<h1>Luke Schnetlage's Kung Fu Panda Po Magic Rectangle</h1>
	</header>

	<main>
		<p>Po's Magic Rectangle:</p>
		<p><?php echo "Po's magic rectangle has $row rows and $column columns." ?></p>
		<br>
		<p>Nested for loop rectangle</p>
		<p><?php echo $forloopOutput ?></p>
		<br>
		<p>Nested while loop rectangle</p>
		<p><?php echo $nestedwhileOutput ?></p>
		<br>
		<p>Nested do..while loop rectangle</p>
		<p><?php echo $nesteddowhileOutput ?></p>

		<a href="index.htm">back to first page</a>
	</main>


</body>

</html>