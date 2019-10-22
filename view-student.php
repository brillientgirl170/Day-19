<?php
require_once 'vendor/autoload.php';
use App\classes\student;
$massege= ' ';
 $queryResult= student::getStudentsInfo();

//  while($Student= mysqli_fetch_assoc($queryResult)){
//      echo '<pre>';
//      print_r($Student);
//  }

?>
<hr/>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>
<h1 style="color: green"><?php echo $massege; ?></h1>
<hr/>

    <table border="1" width="700">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student Mobile</th>
        </tr>
        <?php while($Student= mysqli_fetch_assoc($queryResult)){?>
        <tr>
            <td><?php echo $Student['id']; ?></td>
            <td><?php echo $Student['name']; ?></td>
            <td><?php echo $Student['email']; ?></td>
            <td><?php echo $Student['mobile']; ?></td>
        </tr>
        <?php } ?>
    </table>

