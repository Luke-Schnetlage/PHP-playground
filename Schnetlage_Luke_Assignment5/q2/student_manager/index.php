<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php
require('../model/luke_schnetlage_database.php');
require('../model/luke_schnetlage_major_db.php');
require('../model/luke_schnetlage_student_db.php');


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
    $students = get_students_by_major($major_id);
    $majors = get_majors();

    include("./luke_schnetlage_student_list.php");

}


?>


