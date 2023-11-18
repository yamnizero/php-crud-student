<?php

$conn = mysqli_connect("localhost","root","","student_crud");

if (!$conn) {
    die('Connection Failed' . mysqli_connect_errno());
}

?>