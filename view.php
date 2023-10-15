<?php
    require_once('database.php');
    $query = 'SELECT * FROM student';
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            View Student Records
        </title>
        <link rel="stylesheet" href="css/view_styles.css" >
    </head>
<body>

<nav>
    <ul><li class="menu">Menu
    <ul class="hidden">
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View</a></li>
    </ul>
    </li></ul>
</nav>
    
<div class="data">

    <table class="data-table">
        
        <div class="top">

        <tr class="m">
        <td class="f">First Name</td>
        <td class="l">Last Name</td>
        <td class="i">Student_ID</td>
        <td class="s">Semester</td>
        <td class="g">Grade</td>
        
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <td class="f"><?php echo $row['fname']; ?></td>
        <td class="l"><?php echo $row['lname']; ?></td>
        <td class="i"><?php echo $row['StdID']; ?></td>
        <td class="s"><?php echo $row['sem']; ?></td>
        <td class="g"><?php echo $row['grade']; ?></td>
        
        <?php
        }
        ?>
        </tr>
        </div>
    </table>
</div>

</body>
</html>