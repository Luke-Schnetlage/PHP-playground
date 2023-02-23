<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php
function get_major_name($majorID) 
{
    global $db;
		
	$query = 'SELECT * FROM major WHERE majorID = :majorID';
	$statement = $db->prepare($query);
	$statement->bindValue(':majorID', $majorID);
	$statement->execute();
	$category = $statement->fetch();
	$major_name = $category['majorName'];
	$statement->closeCursor();
    return $major_name;
}

function get_majors(){
	global $db;
	//Get all categories
	$query = 'SELECT * FROM major ORDER BY majorID';
	$statement = $db->prepare($query);
	$statement->execute();
	$majors = $statement->fetchAll();
	$statement->closeCursor();
	return $majors;
}


?>