<?php
require('../model/database.php');
require('../model/product_db.php');  //step 2
require('../model/category_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'list_products') {
    // Get the current category ID
	$category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
	
	// echo $category_id."<br>"; //step 2 comment out

    // Get product and category data
    $category_name = get_category_name($category_id);
	/*******************************************
	* step 2: - get all category names
	* step 2: - get all product names
	*******************************************/
	$categories = get_categories();
	$products = get_products_by_category($category_id);
	// Display the product list
    include('product_list.php');
	// echo $category_name."<br>";  //step 2 comment out

	
/*****************************************
* step 3: action is delete_product ?
*****************************************/
} else if ($action == 'delete_product') {
    // Get the IDs
    $product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);

    // Delete the product
    delete_product($product_id);  //

    // Display the Product List page for the current category
    header("Location: .?category_id=$category_id");
}	//end of delete_product, step 3
    
?>









