<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//INSERT DATA
if (isset($_POST['save_checkbox'])) {
    $name = $_POST['name'];
    $agree = $_POST['agree'];

    $query = "INSERT INTO checkbox (name,agree) VALUES ('$name','$agree')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("location: checkbox.php");
    }else{
        $_SESSION['status'] = "Data Not Insert ";
        header("location: checkbox.php");
    }

}

?>