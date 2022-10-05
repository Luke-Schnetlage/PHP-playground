<?php
require_once('eg009a_database.php');
//get all categories
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
/*
foreach ($categories as $category) :
	echo $category['categoryID'];
	echo "<br>";
	echo $category['categoryName'];
	echo "<br>";
endforeach;
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Kungfu Panda Shop</title>
<meta charset="utf-8">
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header><h1>Kungfu Panda - Product Manager</h1></header>
	
	<main>
		<h1>Add Product</h1>
		<form method="post" action="eg009f_add_product.php" id="add_product_form">
			<label>Category:</label>
			<select name="category_id">
			<?php foreach ($categories as $category) : ?>
				<option value="<?php echo $category['categoryID'];?>"><?php echo $category['categoryName'];?></option>
			<?php endforeach; ?>
			</select>
			<br>
			<label>Code:</label>
			<input name="code" type="text">
			<br>
			<label>Name:</label>
			<input name="name" type="text">
			<br>
			<label>List Price:</label>
			<input name="price" type="text">
			<br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Product">
		</form>
		<p><a href="eg009c_index.php">View Product List</a></p>
	</main>
	
	<footer>
		<p class="right">
			
			&copy; <?php echo date("Y"); ?> Kungfu Panda Shop, Inc.
		</p>
	</footer>

</body>

</html>
