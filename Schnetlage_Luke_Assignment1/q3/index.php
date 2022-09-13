<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->
<?php
if (!isset($power)) {
    $power = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Luke Schnetlage's Kung Fu Panda Po Power Level
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Luke Schnetlage's Kung Fu Panda Po Power Level</h1>
    </header>
    <main>

        <p>This program will prompt Luke for Kung-Fu-Panda Po's power level(numerical).
            The program will the given input into Po's power level.
        </p>
        <ul>
            <li>less than 0: Po eats too much noodle</li>
            <li>0 to 200: Po reaches the training hall</li>
            <li>201 to 400: Po reaches the student barracks</li>
            <li>401 to 600: Po reaches the Peach Tree of Heavenly Wisdom</li>
            <li>601 to 800: Po climbs the Wu Da Mountains</li>
            <li>801 to 1000: Po trains at the Pool of Sacred Tears</li>
            <li>Greater than 1000: Po defeats Tai Lung</li>
        </ul>



        <form method="post" action="index_process.php">
            <div id="data">
                <label>Po's Power Level</label>
                <input type="number" name="power_level" value="<?php echo htmlspecialchars($power); ?>">
                <br>

            </div>

            <div id="button">
                <label>&nbsp;</label>
                <input type="submit" value="submit">
                <br><br>
            </div>

        </form>
    </main>


</body>


</html>