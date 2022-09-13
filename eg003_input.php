<?php
//default variables
if (!isset($investment)){
	$investment = '';
}
if (!isset($interest)){
	$interest = '';
}
if (!isset($years)){
	$years = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>eg003 Debt input calculator
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css">
	

</head>

<body>

<main>
	<h1>Luke&#39;s Debt Calculator</h1>
	<br>
	
		<?php if (!empty($error_message)) { ?>	
			<p class="error">
				<?php echo htmlspecialchars($error_message); ?> 
			</p>
		<?php } ?>
			
	<br>
	<form method="post" action="eg003_process.php">
		<div id="data">
		<label>Borrow Amount:</label>
		<input 
			type="text" 
			name="investment" 
			value="<?php echo htmlspecialchars($investment); ?>">
		&nbsp; dollars
		<br>
		
		<label>Yearly Interest Rate:</label>
		<input 
			type="text" 
			name="interest_rate" 
			value="<?php echo htmlspecialchars($interest); ?>">
		&nbsp; %
		<br>
		
		<label>Number of Years: </label>
		<input 
			type="text" 
			name="years" 
			value="<?php echo htmlspecialchars($years); ?>">
		&nbsp; years
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