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


        <h3>Choose value n (1 to 20) to enter coordinates</h3>
        <br>
        <form method="post" action="luke_schnetlage_dynamic_textbox.php">
            <label for="valueN">value n:</label>
            <select name="valueN" id="valueN">
                <?php for ($i = 1; $i < 21; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php }; ?>
            </select>
            <input type="submit" value="Submit">
        </form>


        <br><br><br>
        <h3>OR click on the link below to clean up the database table</h3>
        <br>
        <p><a href="luke_schnetlage_clear_table.php">Remove old records</a></p>

        <footer>
            <p class="right">
                &copy; <?php echo date("Y"); ?> Luke Schnetlage Kung Fu School
            </p>
        </footer>
    </main>
</body>

</html>