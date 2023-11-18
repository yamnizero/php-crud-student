<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//D DATA
if (isset($_POST['delete_stud_data'])) {
    $id =  $_POST['delete_stud_id'];
 
   


    $query = "DELETE FROM student WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Data delete Successfully";
        header("location: delete-data-by-id.php");
    }else{
        $_SESSION['status'] = "Not delete";
        header("location: delete-data-by-id.php");
    }

}

?>