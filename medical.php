<?php include 'conn.php'; ?>
<?php

include 'conn.php';

if(isset($_POST['done'])){
 $prid = $_POST['pid'];
 $rsn = $_POST['reason'];
 $dn = $_POST['Doctors_Name'];
 $sd = $_POST['S_Date'];


 $queryy = "INSERT INTO `medicalservice`(`Worker_ID`, `S_Date`, `Doctors_Name`, `Reason`) VALUES ('$prid','$sd','$dn','$rsn')";

  $queryy2 = mysqli_query($conn,$queryy);


}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Waste management System(Medical)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <h1 class="display-4">Waste Management System</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-primary text-center"> Workers' who took medical service </h1>
                <br>
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">Add Medical Data</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Medical Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Worker ID</label>
                                            <input name="pid" type="number" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Reason</label>
                                            <input name="reason" type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Doctor's Name</label>
                                            <input name="Doctors_Name" type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Service Date</label>
                                            <input name="S_Date" type="date" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer ml-auto">
                                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <table id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">
                        <th> Worker ID </th>
                        <th> Worker Name</th>
                        <th> Doctor's Name </th>
                        <th> Reason </th>
                        
                        <th> Service Date </th>
                       



                    </tr>


                    <?php


$q9 = "SELECT * FROM `medicalservice` LEFT JOIN `worker` ON `medicalservice`.`Worker_ID` = `worker`.`pid`";

$showw = mysqli_query($conn,$q9);

while($res = mysqli_fetch_array($showw)){
?>
                    <tr class="text-center">
                       
                        <td>
                            <?php echo $res['pid'];  ?>
                        </td>
                        <td>
                            <?php echo $res['name'];  ?>
                        </td>
                        <td>
                            <?php echo $res['Doctors_Name']; ?>
                        </td>
                        <td>
                            <?php echo $res['Reason'];  ?>
                        </td>
                        <td>
                            <?php echo $res['S_Date'];  ?>
                        </td>



                    </tr>

                    <?php 
}
?>

                </table>


           




            </div>
        </div>


    </div>



                <?php

                    include 'footer.php';
                ?>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabledata').DataTable();
        })
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>