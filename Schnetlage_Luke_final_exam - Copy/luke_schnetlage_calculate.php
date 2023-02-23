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

        <?php
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

        echo "<h4>The following function is applied to the coordinates:</h4>";
        echo "<h3>f(xi,yi) = (xi)<sup>2</sup> / (yi)<sup>3</sup></h3>";

        $counter = 1;
        foreach ($points as $point) {
            echo "f(x$counter,y$counter) = ";
            echo "(x$counter)<sup>2</sup> / (y$counter)<sup>3</sup> = ";
            echo "$point[x]<sup>2</sup> / $point[y]<sup>3</sup> = ";
            $result = ($point['x'] ** 2) / ($point['y'] ** 3);
            echo number_format($result, 2, '.', "");
            echo "<br>";
            $counter++;
        }


        ?>

        <a href="index.php">Return to home page</a>
        <footer>
            <p class="right">
                &copy; <?php echo date("Y"); ?> Luke Schnetlage Kung Fu School
            </p>
        </footer>
    </main>
</body>

</html>