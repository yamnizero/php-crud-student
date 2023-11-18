
<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
                if (isset($_SESSION['status'])) {

                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to Insert Data Into Database in PHP</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                           <div class="from-group mt-3 ">
                                <label for="">Student ID</label>
                                <input type="text" name="stud_id" class="form-control" placeholder="Enter your Name">
                            </div>
                            <div class="from-group mt-3 ">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                            </div>
                            <div class="from-group mt-3  ">
                                <label for="">Class</label>
                                <input type="text" name="class" class="form-control" placeholder="Enter your Phone Number">
                            </div>
                            <div class="from-groupmt-3 ">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your email">
                            </div>
                           
                            <div class="from-group mt-3 ">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Save Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>