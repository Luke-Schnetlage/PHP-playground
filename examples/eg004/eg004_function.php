<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Luke Schnetlage's basic PHP
	</title>
	<meta charset="utf-8">
	

</head>

<body>
<h3>Function</h3>
<?php
function bighello(){
	echo "<h1>HELLO</h1>";
}

bighello();
function addNum($x, $y){
	$result = $x + $y;
	return $result;
}

echo(addNum(40,2));
?>

<h1> Array Examples</h1>
<p>
<?php
$users = array("Zoo","Wee","Ma","Ma");
echo $users[0] . "<br>\n";
echo $users[1] . "<br>\n";
echo $users[2] . "<br>\n";
echo $users[3] . "<br>\n";
print_r($users);


echo "<br><br>";

echo "The size of \$users is:"; // \ to show $
echo count($users). "<br>\n";

for ($i=0;$i<count($users);$i++){
	echo($users[$i] . "<br>\n");
}


echo "<br><br>";

$my_user[] = "Robert Bryan";
$my_user[] = "Ada Lovelace";
$my_user[] = "Carl Wheezer";

print_r($my_user);
?>
</p>

<h1>Associate Arrays</h1>
<?php 
//key => value .... pair

$character = array (
					"name" => "bob",
					"occupation" => "plumber",
					"age" => 30,
					"adress" => "2304 Royal rd. 30223");

echo ($character["name"] . "<br>\n");
echo ($character["occupation"] . "<br>\n");
echo ($character["age"] . "<br>\n");
echo ($character["adress"] . "<br>\n");

$character['hobby'] = "cutting grass";
echo ($character["hobby"] . "<br>\n");

echo "<br><br>";

foreach($character as $key => $value){
	print "$key = $value <br>\n";
}

echo "<br><br>\n";

$hashtable = array(
					"b" => 50,
					"d" => 100,
					"c" => 30,
					"a" => 20
					);
					
foreach($hashtable as $k => $v){
	print "$k = $v <br>\n";
}
//keysort
ksort($hashtable);
echo "After keysort: <br>\n";
foreach($hashtable as $k => $v){
	print "$k = $v <br>\n";
}
//value sort
asort($hashtable);
echo "after asort: <br>\n";
foreach($hashtable as $k => $v){
	print "$k = $v <br>\n";
}
?>

<h1>Array of Associate Arrays</h1>
<p>
<?php
$shop = array(
				array(
						"Title" => "Freesia",
						"Price" => 12.50,
						"Stock" => 15)
				,
				array(
						"Title" => "SunFlower",
						"Price" => 8.00,
						"Stock" => 18)
				
				,
				array(
						"Title" => "Rose",
						"Price" => 15.00,
						"Stock" => 8)
				);//end of $shop

echo "<h3>".count($shop) ." elements:</h3>";


for ($row = 0; $row < count($shop); $row++){
	echo "Item ". ($row +1). ":<br>\n";
	foreach($shop[$row] as $k => $v){
		echo "$k = $v<br>\n";
	}
	echo "<br>\n";
}
?>
</p>




</body>

</html>