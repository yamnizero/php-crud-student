<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//INSERT DATA
if (isset($_POST['insert_data'])) {
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $designation = $_POST['designation'];

    $query = "INSERT INTO employee (name,phone,email,designation) VALUES ('$name','$phone','$email','$designation')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Insert Successfully";
        header("location: insert-data.php");
    }else{
        $_SESSION['status'] = "Data Not Insert ";
        header("location: insert-data.php");
    }

}

?>