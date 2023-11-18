<?php
session_start();
require 'dbcon.php';

//Delete
if (isset($_POST['delete_student'])) {
    $student_id =mysqli_real_escape_string($conn, $_POST['delete_student']);


    $query = "DELETE FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not Deleted Successfully ";
        header("location: index.php");
        exit(0);
    }
}
//UPDATE
if (isset($_POST['update_student'])) {
    $student_id =mysqli_real_escape_string($conn, $_POST['student_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $coures = mysqli_real_escape_string($conn, $_POST['coures']);

    $query = "UPDATE students SET  name='$name',email='$email',phone='$phone',coures='$coures' WHERE id='$student_id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not Updated Successfully ";
        header("location: index.php");
        exit(0);
    }
}

// INSERT
if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $coures = mysqli_real_escape_string($conn, $_POST['coures']);


    $query = "INSERT INTO students (name,email,phone,coures) VALUES ('$name','$email','$phone','$coures')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("location: student_create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created Successfully ";
        header("location: student_create.php");
        exit(0);
    }
}
