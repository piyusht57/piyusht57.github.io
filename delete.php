<?php
$servername="localhost";
$username="root";
$password="";
$database="demo";
$con=mysqli_connect($servername,$username,$password,$database);

$id=$_GET['id'];
$sql1="DELETE FROM testing WHERE id=$id";
mysqli_query($con,$sql1);
header("location:registration.php");
?>