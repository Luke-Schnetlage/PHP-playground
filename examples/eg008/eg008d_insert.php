<?php
//this does not work???
require_once('eg008a_connect_database.php');

$productCode = 'lordshen';
$query = "DELETE FROM products WHERE productCode = :productCode;";

$statement = $db->prepare($query);
$statement->bindValue(':productCode',$productCode);

$statement->execute();
$statement->closeCursor();
include('eg008c_select.php');

?>