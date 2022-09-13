<!--
Luke Schnetlage
9/11/2022
CSCI 4000-10 
Assignment 1
-->
<?php
$power = filter_input(INPUT_POST,'power_level',FILTER_SANITIZE_SPECIAL_CHARS);
if ($power < 0){
    $output = "Po eats too much noodle";
}else if ($power < 201){
    $output = "Po reaches the training hall";
}else if ($power < 401){
    $output = "Po reaches the student barracks";
}else if ($power < 601){
    $output = "Po reaches the Peach Tree of Heavenly Wisdom";
}else if ($power < 801){
    $output = "Po climbs the Wu Da Mountains";
}else if ($power < 1001){
    $output = "Po trains at the Pool of Sacred Tears";
}else {
    $output = "Po defeats Tai Lung";
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

        <p>Po's power level is <?php echo($power) ?>.</p>
        <p><?php echo($output);?></p>
        
        <br>
        <a href="index.php">back to first page</a>
    </main>


</body>


</html>