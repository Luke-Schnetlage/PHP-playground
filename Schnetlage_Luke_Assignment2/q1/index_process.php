<!--
Luke Schnetlage
9/25/2022
CSCI 4000
Assignment2
 -->
<?php
//variable initialization
$hourly_pay = $_GET['hourly_pay'];
$hours_worked = $_GET['hours_worked'];
$dependents = $_GET['dependents'];

//if someone works less than 40 hours, overtime = 0, else overtime = total hours - 40
if ($hours_worked > 40) {
	$overtime_hours = $hours_worked - 40;
	$std_hours = 40;
} else {
	$overtime_hours = 0;
	$std_hours = $hours_worked;
}

//find standard pay, if no overtime, standard pay = total pay, otherwise standard pay covers first 40 hours worked
if ($overtime_hours == 0) {
	$std_pay = $hourly_pay * $hours_worked;
} else {
	$std_pay = $hourly_pay * 40;
}

//overtime pay is 1.5 * hourly pay 
$overtime_pay = $overtime_hours * (1.5 * $hourly_pay);

//gross is overtime and standard pay combined
$gross_pay = $overtime_pay + $std_pay;

/*
Dependant break down
No dependents: 28% tax
1-3 dependents: 25% tax
4-6 dependents: 15% tax
7+ dependents: 10% tax
*/
if ($dependents < 1) {
	$tax_rate =  0.28;
} else if ($dependents < 4) {
	$tax_rate =  0.25;
} else if ($dependents < 7) {
	$tax_rate =  0.15;
} else if ($dependents >= 7) {
	$tax_rate =  0.10;
}

$tax_deduction = $gross_pay * $tax_rate;

$net_pay = $gross_pay - $tax_deduction;

//formatting all money to 2 decimal places
$tax_deduction = number_format($tax_deduction,2);
$overtime_pay = number_format($overtime_pay,2);
$hourly_pay = number_format($hourly_pay,2);
$net_pay = number_format($net_pay,2);
$gross_pay = number_format($gross_pay,2);
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

		<p>This page calculates an employee's net pay.</p>

		<h4>Your results:</h4>

		<table style="width: 600px">
			<tr>
				<td style="width: 300px">Employee's hourly rate of pay =</td>
				<td style="width: 300px"><?php echo "$$hourly_pay" ?> per hour</td>
			</tr>
			<tr>
				<td style="width: 300px">Number of hours worked that week =</td>
				<td style="width: 300px"><?php echo $hours_worked ?> hours</td>
			</tr>
			<tr>
				<td style="width: 300px">Number of dependents employee has =</td>
				<td style="width: 300px"><?php echo $dependents ?> dependents</td>
			</tr>
			<tr>
				<td style="width: 300px">Number of overtime hours =</td>
				<td style="width: 300px"><?php echo ("$hours_worked - 40 = $overtime_hours") ?> hours</td>
			</tr>
			<tr>
				<td style="width: 300px">First 40 hours pay =</td>
				<td style="width: 300px"><?php echo ("$$hourly_pay x $std_hours = $$std_pay") ?></td>
			</tr>
			<tr>
				<td style="width: 300px">Next <?php echo $overtime_hours ?> hours pay(overtime) =</td>
				<td style="width: 300px"><?php echo ("$$hourly_pay x $overtime_hours x 1.5 = $$overtime_pay")  ?></td>
			</tr>
			<tr>
				<td style="width: 300px">Gross pay =</td>
				<td style="width: 300px"><?php echo ("$$std_pay + $$overtime_pay = $$gross_pay")  ?></td>
			</tr>
			<tr>
				<td style="width: 300px">Tax rate for <?php $dependents ?> dependents =</td>
				<td style="width: 300px"><?php echo ($tax_rate * 100) ?>%</td>
			</tr>
			<tr>
				<td style="width: 300px">Tax deduction =</td>
				<td style="width: 300px"><?php echo "$$gross_pay x $tax_rate = $$tax_deduction" ?></td>
			</tr>
			<tr>
				<td style="width: 300px">Net pay =</td>
				<td style="width: 300px"><?php echo "$$gross_pay - $$tax_deduction = $$net_pay" ?></td>
			</tr>
			<tr>
				<td style="width: 300px">This employee earned:</td>
				<td style="width: 300px"><?php echo "$$net_pay" ?> this week.</td>
			</tr>
		</table>

		<br>
		<a href="index.php">back to first page</a>
	</main>


</body>

</html>