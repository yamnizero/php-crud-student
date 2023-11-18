<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//INSERT DATA
if (isset($_POST['save_radio'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO demo (name,gender) VALUES ('$name','$gender')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("location: radio.php");
    }else{
        $_SESSION['status'] = "Data Not Insert ";
        header("location: radio.php");
    }

}

?>