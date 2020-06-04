<?php
   include('session.php');
?>
<?php include 'conn.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">


        <link rel="stylesheet" href="styles.css">
    <title>Waste Management System</title>

</head>

<body>



    <div class="container mt-5">
    <div class="row">
            <div class="col-sm-5 offset-3">
                <h3 class="text-primary border-danger display-7">Welcome to Waste Management System</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 text-center">
                    <a href="workerinfo.php">
                            <div class="bg-info text-white inline-block">
                                <h1 class="display-4 p-5">Worker Info</h1>
                            </div>
                        </a>
            </div>
            <div class="col-sm-6 text-center">
                    <a href="wasteauthority.php">
                            <div class="bg-danger text-white inline-block">
                                <h1 class="display-4 p-5">Management Info</h1>
                            </div>
                        </a>
            </div>

        </div>
        <div class="row mt-3">
                <div class="col-sm-6 text-center">
                        <a href="callhistory.php">
                                <div class="bg-warning text-white inline-block">
                                    <h1 class="display-4 p-5">Informer Info</h1>
                                </div>
                            </a>
                </div>
                <div class="col-sm-6 text-center">
                        <a href="medical.php">
                                <div class="bg-success text-white inline-block">
                                    <h1 class="display-4 p-5">Medical Center</h1>
                                </div>
                            </a>
                </div>
                <div class="col-sm-6 text-center">
                        <a href="area.php">
                                <div class="bg-secondary text-white inline-block">
                                    <h1 class="display-4 p-5">Covered Area</h1>
                                </div>
                            </a>
                </div>

                <div class="col-sm-6 text-center">
                        <a href="coverage.php">
                                <div class="bg-dark text-white inline-block">
                                    <h1 class="display-4 p-5">Working Zone Details</h1>
                                </div>
                            </a>
                </div>
    
            </div>
    </div>

     <?php

include 'footer.php';

?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>