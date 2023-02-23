<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php
include("../view/luke_schnetlage_header.php");
?>

<main>


<h1>Add Student</h1>
		<br>
		<form method="post" action="index.php" id="add_product_form">
			<label>Major:</label>
			<select name="majorID">
				<?php foreach ($majors as $major) : ?>
					<option value="<?php echo $major['majorID']; ?>"><?php echo $major['majorName']; ?></option>
				<?php endforeach; ?>
			</select>
			<br><br>
			<label>First Name:</label>
			<input name="fname" type="text">
			<br><br>
			<label>Last Name:</label>
			<input name="lname" type="text">
			<br><br>
			<label>Gender:</label>
			<select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Non-binary">Non-binary</option>
				<option value="Prefer not to say">Prefer not to say</option>
			</select>
			<br><br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Student">
		</form>
		<p><a href="index.php">View All Students</a></p>
        



    <?php
    include("../view/luke_schnetlage_footer.php");
    ?>