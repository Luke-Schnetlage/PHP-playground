<!-- 
Luke Schnetlage
CSCI 4000-10
12/5/22
-->

<?php
$N = filter_input(INPUT_POST, 'valueN', FILTER_VALIDATE_INT);


require('luke_schnetlage_database.php');
// we divide count by 2 to count the number of pairs we have and make reading easier
$no_pairings = count($_POST) / 2;


//our form just reloads our page with our data points posted
//if we successfully posted our data, we run this code and save the data in our db 
if ($no_pairings > 1) {
    //create an array of arrays, each entry contains an array[2]; xi at index 0 and yi at index 1
    for ($i = 1; $i <= ($no_pairings); $i++) {
        $tempX = filter_input(INPUT_POST, "x" . $i, FILTER_VALIDATE_INT);
        $tempy = filter_input(INPUT_POST, "y" . $i, FILTER_VALIDATE_INT);
        //$tempX = document
        //$tempy = filter_input(INPUT_POST, "y" . $i, FILTER_VALIDATE_INT);
        $point[0] = $tempX;
        $point[1] = $tempy;
        $point_array[$i - 1] = $point;
    }

    //this loop generates our SQL query, "INSERT INTO coordinate(X,Y) VALUES (x,y),..."
    $query = "INSERT INTO coordinate(X,Y) VALUES ";
    foreach ($point_array as $point) {
        $query .= "(";
        $query .= "$point[0]";
        $query .= ",";
        $query .= "$point[1]";
        $query .= ")";
        if ($point != $point_array[$no_pairings - 1]) { //this adds a comma after every line but the last
            $query .= ",";
        }
    }
    $query .= ";"; //pin a semicolon to the end
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();

    //this loads our next page after storing the values
    header("Location:luke_schnetlage_dynamic_process.php");
}



//}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Luke Schnetlage's secret calculator</title>
    <meta charset="utf-8">
    <link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h1>Luke Schnetlage's secret calculator</h1>
    </header>
    <main>

        <h1>Please enter values for <?php echo $N; ?> coordinates.</h1>
        <br>
        <!--no action, we want to reload the page with more than 1 data point(more than just N)
            posted, from there we will store data and load luke_schnetlage_dynamic_process.php
        -->
        <form method="post" >
            <?php
            for ($i = 1; $i <= $N; $i++) {
            ?>
                (
                x<?php echo $i; ?>: <input name="x<?php echo $i; ?>" type="text">,
                y<?php echo $i; ?>: <input name="y<?php echo $i; ?>" type="text">
                )
                <br><br>

            <?php
            }
            ?>
            <input type="submit" value="submit" id="submit">
        </form>

        <footer>
            <p class="right">
                &copy; <?php echo date("Y"); ?> Luke Schnetlage Kung Fu School
            </p>
        </footer>
    </main>
</body>

</html>