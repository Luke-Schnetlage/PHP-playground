<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->


<?php
require('../model/luke_schnetlage_database.php');
require('../model/luke_schnetlage_major_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_students';
    }
}

if ($action == 'list_students') {
    // Get the current category ID
    $major_id = filter_input(
        INPUT_GET,
        'major_id',
        FILTER_VALIDATE_INT
    );
    if ($major_id == NULL || $major_id == FALSE) {
        $major_id = 1;
    }

    $major_name = get_major_name($major_id);
}
?>

<head>
    <title>Luke Schnetlage Kung Fu School</title>
    <meta charset="utf-8">
</head>

<body>

    <main>
        <?php echo $major_id; ?>
        <?php echo $major_name; ?>


        <footer>
            <p class="right">

            </p>
        </footer>
</body>

</html>