<?php
function get_products_by_category($category_id){
	global $db;
	//Get products for selected category
	$query = "SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID";
	$statement = $db->prepare($query);
	$statement->bindValue(':category_id', $category_id);
	$statement->execute();
	$products = $statement->fetchAll();
	$statement->closeCursor();
	return $products;
}

?>