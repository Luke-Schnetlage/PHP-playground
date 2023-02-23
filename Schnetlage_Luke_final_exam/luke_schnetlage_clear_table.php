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
        /**
         * This block connects to the database, deletes all rows, then prints the
         * number of rows affected.
         */
        require('luke_schnetlage_database.php');


        $query = 'DELETE FROM coordinate';
        $statement = $db->prepare($query);
        $statement->execute();
        $row_count = $statement->rowCount();
        $statement->closeCursor();

        echo "<h2>$row_count records removed from the database table</h2>"
        ?>

        <br><br><br>
        <br>
        <p><a href="index.php">Return to home page</a></p>

        <footer>
            <p class="right">
                &copy; <?php echo date("Y"); ?> Luke Schnetlage Kung Fu School
            </p>
        </footer>
    </main>
</body>

</html>