<!DOCTYPE html>
<html>
    <head>
        <title>database</title>
    </head>
<body>
  
<?php
  $conn = mysqli_connect("localhost", "root", "", "data");

    if($conn === false){
        die("Connection Failed" . mysqli_connect_error());
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $StdID = $_POST['StdID'];
    $sem = $_POST['sem'];
    $grade = $_POST['grade'];

    $sql = "INSERT INTO student(fname, lname, StdID, sem, grade) VALUES ('$fname','$lname','$StdID','$sem','$grade')";

    if(mysqli_query($conn, $sql)){
            $properties = get_object_vars($conn);
            foreach ($properties as $property => $value) {
              echo $property . ': ' . $value ;
            }
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
     
?>

</body>
</html>