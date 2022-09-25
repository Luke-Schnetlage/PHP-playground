<!--
Luke Schnetlage
9/25/2022
CSCI 4000
Assignment2
 -->
<?php
//variable initialization, post method
//password is seaweed, input is assumed fully incorrect by default
$guess = filter_input(INPUT_POST, 'guess');
$guess = strtolower($guess);
$password = "seaweed";
$correctGuess = false;

$correct_len = false;
$no_white_space = false;

//the user is warned the secret word must be exactly 7 characters with no white space

//if the guess is the correct length, change flag
if (strlen($guess) == 7) {
	$correct_len = true;
}
//basic regex to check for white space
//if no white space is found, change flag
if (preg_match('/\s/', $guess) == 0) {
	$no_white_space = true;
}
//checks if the guess matches the password
if ($guess == $password) {
	$correctGuess = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Luke Schnetlage's Kung Fu Panda Po Secret Scroll
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">


</head>

<body>
	<header>
		<h1>Luke Schnetlage's Kung Fu Panda Po Secret Scroll</h1>
	</header>
	<main>
		<p>Po's Guess:</p>
		<p>You entered <?php echo $guess ?>.</p>
		<?php
		//if the user's guess is the wrong length, let them know
		if (!$correct_len) {
			echo "<p>$guess does not contain exactly 7 characters.</p>";
		}
		//if the user's guess has white space, let them know
		if (!$no_white_space) {
			echo "<p>$guess contains at least one empty space.</p>";
		}
		//general error message
		if (!$correctGuess) {
			echo "<p>You cannot open the secret scroll. Please try again.</p>";
		} else { //success message
			echo "<p>Good job! You can open the secret scroll.</p>";
		}
		?>
		<br>
		<a href="index.htm">back to first page</a>


	</main>


</body>

</html>