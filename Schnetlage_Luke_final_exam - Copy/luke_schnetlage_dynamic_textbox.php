<!-- 
Luke Schnetlage
CSCI 4000-10
12/5/22
-->

<?php
$N = filter_input(INPUT_POST, 'valueN', FILTER_VALIDATE_INT);


//if (isset($_POST["submit"])) {



    
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

         <form method="post" action="luke_schnetlage_dynamic_process.php"> 
        <!--<form method="post" action="">-->
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