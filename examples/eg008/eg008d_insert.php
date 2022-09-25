<?php
/*
INSERT INTO products(categoryID,productCode,productName,listPrice)
VALUES (1,"lordshen","Lord Shen Figure 11 inches",15.50);
*/
require_once('eg008a_connect_database.php');
$category_id = 1;
$code = "lordshen";
$name = "Lord Shen Figure 11 inches";
$price = 15.50;

$query = 'INSERT INTO products(categoryID,productCode,productName,listPrice)
VALUES (:category_id,:code,:name,:price)';


$statement = $db->prepare($query);
$statement->bindValue(':category_id',$category_id);
$statement->bindValue(':code',$code);
$statement->bindValue(':name',$name);
$statement->bindValue(':price',$price);
$statement->execute();
$statement->closeCursor();
include('eg008c_select.php');

?>