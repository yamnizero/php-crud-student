<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete DATA</title>
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
                        <h4>How to Delete Multiple Data or record using Checkbox in PHP MySQL</h4>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="code-deleteMultiple.php" method="POST">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            <button class="btn btn-danger" type="submit" name="stud_delete_multiple">Delete</button>
                                        </th>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Phone No</th>
                                    </tr>
                                </tbody>
                                <tbody>

                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "crud");
                                    $query = "SELECT * FROM student";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <td style="width:10px; text-align:center">
                                                    <input type="checkbox" name="stud_delete_id[]" value="<?= $row['id'] ?>">
                                                </td>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['stud_name'] ?></td>
                                                <td><?= $row['stud_class'] ?></td>
                                                <td><?= $row['stud_phone'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="5">
                                                NO Record Found
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
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