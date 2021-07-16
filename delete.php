<?php
include 'conn.php';
$id =$_GET['id'];
$q ="DELETE FROM `add1` WHERE Sr.No=$id ";

mysqli_query($con,$q);
header('location:read.php');

?>