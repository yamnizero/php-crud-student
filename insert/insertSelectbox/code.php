<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//INSERT DATA
if (isset($_POST['save_selectbox'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO selectbox (name,gender) VALUES ('$name','$gender')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("location: selectbox.php");
    }else{
        $_SESSION['status'] = "Data Not Insert ";
        header("location: selectbox.php");
    }

}

?>