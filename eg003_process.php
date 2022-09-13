<?php
$investment = filter_input(INPUT_POST,'investment',FILTER_VALIDATE_FLOAT);
$interest = filter_input(INPUT_POST,'interest_rate',FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST,'years',FILTER_VALIDATE_INT);

$error_message = '';
if ($investment === FALSE){
	$error_message = 'ERROR: Investment must be a valid number';
} else if ($investment <=0){
	$error_message = 'ERROR: Investment must be a positive number';
}
if ($interest === FALSE){
	$error_message = 'ERROR: Interest must be a valid number';
} else if ($interest <=0){
	$error_message = 'ERROR: Interest must be a positive number';
}
if ($years === FALSE){
	$error_message = 'ERROR: Years must be a valid number';
} else if ($years <=0){
	$error_message = 'ERROR: Years must be a positive number';
}

if ($error_message != ''){
	include('eg003_input.php');
	exit();
}
//echo $error_message;
$future_value = $investment;

for($i = 0; $i < $years; $i++){
	$future_value = $future_value + ($future_value * ($interest/100));
}

//formatting
$investment_f = '$' . number_format($investment, 2);
$yearly_rate_f = $interest . '%';
$future_value_f = '$' . number_format($future_value, 2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		eg003 Debt input calculator
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css">
	

</head>

<body>

	<main>
		<h1>Luke&#39;s Debt Calculator</h1>
		<br>
		<label>Borrow Amount</label>
		<span><?php echo $investment_f;?></span>
		<br>
		<label>Yearly Interest Rate</label>
		<span><?php echo $yearly_rate_f;?></span>
		<br>
		<label>Number of Years:</label>
		<span><?php echo $years;?></span>
		<br>
		<label>Total Debt Amount: </label>
		<span><?php echo $future_value_f;?></span>
		<br>
	</main>

	

</body>

</html>