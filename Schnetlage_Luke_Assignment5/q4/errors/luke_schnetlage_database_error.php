<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->
<!--Basic error message page, 
takes an error from database, prints it here -->
<?php 
include("../view/luke_schnetlage_header.php");
?>

	<main>
		<h1>Database Error</h1>
		<p class="error">Error message: <?php echo $error_message; ?></p>


		<br><br>
		<p><a href="index.php">View All Students</a></p>

<?php 
include("../view/luke_schnetlage_footer.php");
?>
