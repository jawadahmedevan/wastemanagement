<?php

include 'conn.php';


$pid = $_GET['pid'];

$q = " DELETE FROM `worker` WHERE pid = '$pid'";

$qqq=mysqli_query($conn, $q);

 header('location:workerinfo.php');

?>