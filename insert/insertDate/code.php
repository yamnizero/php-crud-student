<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//INSERT DATA
if (isset($_POST['save_date'])) {
    $name = $_POST['name'];
    $dob = date('Y-m-d', strtotime($_POST['dateofbrith']));
    $time = $_POST['time'];

    $query = "INSERT INTO brith (name,dob,time) VALUES ('$name','$dob','$time')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("location: date.php");
    }else{
        $_SESSION['status'] = "Data Not Insert ";
        header("location: date.php");
    }

}

?>