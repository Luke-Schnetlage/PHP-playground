<!--
Luke Schnetlage
9/25/2022
CSCI 4000
Assignment2
 -->
<?php
/*this if ladder determines which button was pressed; uses get method
3n+5 = 1
9-3n = 2
n^2+3 = 3
ar^n = 4
*/
if (isset($_GET['3n+5'])) {
	$button_select = 1;
} else if (isset($_GET['9-3n'])) {
	$button_select = 2;
} else if (isset($_GET['n^2+3'])) {
	$button_select = 3;
} else if (isset($_GET['ar^n'])) {
	$button_select = 4;
}
//variable initialization
//output is an html formatted table, the inner contents are generated bellow 
$output = "<table style='width: 500px'>";
$a = 4;
$r = 3;

//this loop adds inner content to $output, each loop adding a new row to the table
//depending on the button pressed, each new row follows a specific formula described above
for ($n = 1; $n < 10; $n++) {
	$output .= "<tr>";
	$output .= "<td style='width: 200px'>When n=$n</td>";

	if ($button_select == 1) {
		$output .= "<td style='width: 300px'>3n + 5 = " . (3 * $n) . " + 5 = " . ((3 * $n) + 5) . "</td>";
	} else if ($button_select == 2) {
		$output .= "<td style='width: 300px'>9 - 3n = 9 - " . (3 * $n) . " = " . (9 - (3 * $n)) . "</td>";
	} else if ($button_select == 3) {
		$output .= "<td style='width: 300px'>n^2 + 3 = " . ($n ** 2) . " + 3 = " . (($n ** 2) + 3) . "</td>";
	} else if ($button_select == 4) {
		$output .= "<td style='width: 300px'>$a * $r^n = $a * " . ($r ** $n) . " = " . ($a * ($r ** $n)) . "</td>";
	}
	$output .= "</tr>";
}
//closes the table
$output .= '</table>';


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		Luke Schnetlage's Kung Fu Panda Po Sequence
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">


</head>

<body>
	<header>
		<h1>Luke Schnetlage's Kung Fu Panda Po Sequence</h1>
	</header>
	<main>
		<p>You pressed button <?php echo $button_select ?></p>
		<br>
		<p>Po's Sequence:</p>
		<br>

		<?php
		echo $output;
		?>

		<br>
		<a href="index.htm">back to first page</a>
	</main>


</body>

</html>