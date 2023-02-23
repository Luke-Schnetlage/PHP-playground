<!-- 
Luke Schnetlage
CSCI 4000-10
12/5/22
-->
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

        <h3>The following coordinates are saved to the database table:</h3>

        <?php

        require('luke_schnetlage_database.php');
        // we divide count by 2 to count the number of pairs we have and make reading easier
        $no_pairings = count($_POST) / 2;
        //$no_pairings = $N ;


        //create an array of arrays, each entry contains an array[2]; x at index 0 and y at index 1

        for ($i = 1; $i <= ($no_pairings); $i++) {
            $tempX = filter_input(INPUT_POST, "x" . $i, FILTER_VALIDATE_INT);
            $tempy = filter_input(INPUT_POST, "y" . $i, FILTER_VALIDATE_INT);
            //$tempX = document
            //$tempy = filter_input(INPUT_POST, "y" . $i, FILTER_VALIDATE_INT);
            $point[0] = $tempX;
            $point[1] = $tempy;
            $point_array[$i - 1] = $point;
        }

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
        $query .= ";";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();

        $query = "SELECT * FROM coordinate";
        $statement = $db->prepare($query);
        $statement->execute();
        $points = $statement->fetchAll();
        $statement->closeCursor();

        $counter = 1;
        foreach ($points as $point) {
            echo "x$counter = $point[x],  y$counter = $point[y]; ";
            echo "<br>";
            $counter++;
        }
        ?>


        <br>
        <h3>
            click on the link below to retrieve coordinates from the
            database table for calculation
        </h3>
        <br>
        <a href="luke_schnetlage_calculate.php">Retrieve records for calculation</a>

        <footer>
            <p class="right">
                &copy; <?php echo date("Y"); ?> Luke Schnetlage Kung Fu School
            </p>
        </footer>
    </main>
</body>

</html>