<?php

session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Student Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- -->
    <div class="container mt-5">
        <?php include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Student Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">

                        <?php
                        if (isset($_GET['id']))
                            // echo $student_id = $_GET['id'];
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id'";
                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                        ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?=$student['id']?>">
                                <div class="mt-3">
                                    <label>Student Name</label>
                                    <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label>Student Email</label>
                                    <input type="text" name="email" value="<?=$student['email'];?>" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label>Student Phone</label>
                                    <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label>Student Coures</label>
                                    <input type="text" name="coures" value="<?=$student['coures'];?>" class="form-control">
                                </div>
                                <div class=" mt-3 ">
                                    <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
                                </div>
                            </form>
                        <?php
                        } else {
                            echo "<h4>No Such Id Found</h4>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>