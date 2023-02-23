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
        /**
         * This block connects to the database, collects all rows of the coordinate table,
         * and prints them out in the "Xi = k, Yi = j" format
         * 
         */
        require('luke_schnetlage_database.php');

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