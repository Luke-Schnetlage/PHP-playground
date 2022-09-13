<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->
<?php
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
if ($age < 5){
    $price = 2.00;
} else if ($age >= 5 && $age <= 15){
    $price = 6.00;
} else if ($age > 15){
    $price = 8.00;
}

$price = number_format($price, 2);
$output = "Luke's age is $age years old, and the cost of Luke's ticket is $$price.";

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
            <li>Ages 5 and under cost $2.00</li>
            <li>Ages between 5 and 15 cost $6.00</li>
            <li>Ages above 15 cost $8.00</li>
        </ul>

        <h4><?php echo($output); ?> </h4>
        <br><br>
        <a href="index.php">back to first page</a>
	</main>


</body>


</html>