<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//Update DATA
if (isset($_POST['update_stud_data'])) {
    $id =  $_POST['stud_id'];
   $name = $_POST['name'];
   $class = $_POST['class'];
   $phone = $_POST['phone'];
   


    $query = "UPDATE student SET stud_name ='$name' , stud_class ='$class' , stud_phone ='$phone' WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("location: update-data-by-id.php");
    }else{
        $_SESSION['status'] = "Not Updated";
        header("location: update-data-by-id.php");
    }

}

?>