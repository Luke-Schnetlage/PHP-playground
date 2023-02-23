<!-- 
Luke Schnetlage
CSCI 4000-10
11/13/22
-->

<?php
include("../view/luke_schnetlage_header.php");
?>

<main>


    <h1>Student List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
            <ul>
                <?php foreach ($majors as $major) : ?>
                    <li>
                        <a href="?major_id=<?php echo $major['majorID']; ?>">
                            <?php echo $major['majorName']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>



    <section>
        <!-- display a table of students -->
        <h2><?php echo $major_name; ?></h2>
        <table>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?php echo $student['studentID']; ?></td>
                    <td><?php echo $student['firstName']; ?></td>
                    <td><?php echo $student['lastName']; ?></td>
                    <td><?php echo $student['gender']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_product" />
                            <input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>" />
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>


    <?php
    include("../view/luke_schnetlage_footer.php");
    ?>