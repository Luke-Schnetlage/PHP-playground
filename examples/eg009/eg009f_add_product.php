<?php 
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

//echo $category_id."<br>";
//echo $code."<br>";
//echo $name."<br>";
//echo $price."<br>";

//validate input
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false)
{
	$error = "Invalid product data. Check all fields and try again.";
	//echo $error ."<br>";
	include('eg009g_error.php');
} else {
	require_once('eg009a_database.php');
	$query = 'INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
	include('eg009c_index.php');
}

?>





