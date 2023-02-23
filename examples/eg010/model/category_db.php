<?php
function get_category_name($category_id){
	global $db;
		
	$query = 'SELECT * FROM categories WHERE categoryID = :category_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_id', $category_id);
	$statement->execute();
	$category = $statement->fetch();
	$category_name = $category['categoryName'];
	$statement->closeCursor();
	return $category_name;
}

function get_categories(){
	global $db;
	//Get all categories
	$query = 'SELECT * FROM categories ORDER BY categoryID';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
	return $categories;
}


?>