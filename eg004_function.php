<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Luke Schnetlage's basic PHP
	</title>
	<meta charset="utf-8">
	

</head>

<body>
<h3>Function<h3>
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

?>

</body>

</html>