<?php 
require_once('eg009a_database.php');

if (!isset($category_id)) {
	$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
	if ($category_id == NULL || $category_id == FALSE) {
		$category_id = 1;
	}
} //end if

$query = 'SELECT * FROM categories WHERE categoryID = :category_id';
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$category = $statement->fetch();
$category_name = $category['categoryName'];
$statement->closeCursor();
//echo $category_name;


//Get all categories
$query = 'SELECT * FROM categories ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

/*
foreach ($categories as $category) :
	echo $category['categoryID'];
	echo "; ";
	echo $category['categoryName'];
	echo "<br>\n";
endforeach;
*/

//Get products for selected category
$query = "SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID";
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();

/*
foreach ($products as $p)
{
	echo $p['productCode']."; ";
	echo $p['productName']."; ";
	echo $p['listPrice']."<br>\n ";
}	//end foreach
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>kungfu panda shop</title>
	<meta charset="utf-8">
	<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>Kungfu Panda - Product Manager</h1>
	</header>
	
	<main>
		<h1>Product List</h1>
		<aside>
			<h2>Categories</h2>
			<nav>
				<ul>
				<?php 
				foreach ($categories as $category) :
				?>
					<li>
					<a href="?category_id=
					<?php echo $category['categoryID'];?>
					"><?php echo $category['categoryName'];?></a>
					</li>
				<?php 
				endforeach;
				?>
				</ul>
			</nav>
		</aside>
		
		<section>
			<h2><?php echo $category_name;?></h2>
			
			<table style="width: 100%">
			
			<tr>
				<th>Code</th>
				<th>Name</th>
				<th class="right">Price</th>
				<th></th>
			</tr>
			<?php 
			foreach ($products as $p)
			{
			?>
			<tr>
				<td><?php echo $p['productCode'];?></td>
				<td><?php echo $p['productName'];?></td>
				<td class="right"><?php echo $p['listPrice'];?></td>
				<td>
				<form action="eg009d_delete_product.php" method="post">
					<input type="hidden" name="product_id" value="<?php echo $p['productID'];?>">
					<input type="hidden" name="category_id" value="<?php echo $p['categoryID'];?>">
					<input type="submit" value="Delete">
				</form>
				</td>
			</tr>
			<?php 
			}	//end foreach
			?>
			</table>
			<br>
			<p><a href="eg009e_add_product_form.php">Add Product</a></p>
			
		</section>
	</main>
	
	<footer>
		<p class="right">
			&copy; <?php echo date("Y");?> Kungfu Panda Shop, Inc.
		</p>
	</footer>
</body>
</html>





