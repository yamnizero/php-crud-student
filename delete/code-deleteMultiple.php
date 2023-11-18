<?php
session_start();
$conn = mysqli_connect("localhost","root","","crud");

//D DATA
if (isset($_POST['stud_delete_multiple'])) {
    $all_id =  $_POST['stud_delete_id'];
    $extract_id = implode(',' ,$all_id);
 

    $query = "DELETE FROM student WHERE id IN($extract_id)";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['status'] = "Data delete Successfully";
        header("location: deleteMultiple-data.php");
    }else{
        $_SESSION['status'] = "Not delete";
        header("location: deleteMultiple-data.php");
    }

}

?>