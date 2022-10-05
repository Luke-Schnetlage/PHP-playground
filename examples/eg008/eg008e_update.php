<?php
require_once('eg008a_connect_database.php');

$productCode = 'lordshen';
$listPrice = 17.77;

$query = "UPDATE products 
SET listPrice = :listPrice
WHERE productCode = :productCode;";
$statement = $db->prepare($query);
$statement->bindValue(':listPrice', $listPrice);
$statement->bindValue(':productCode', $productCode);
$row_count = $statement->execute();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>eg008e update</title>
<meta charset="utf-8">
<link href="main2.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="content">
<?php 
if ($row_count > 0)
	echo $row_count . " row(s) updated<br>\n";

?>

</div>

</body>

</html>
