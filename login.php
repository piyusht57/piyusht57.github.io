<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";
$con = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $s = "SELECT * FROM testing WHERE name='$name' && rollno='$rollno'";
    $r = mysqli_query($con, $s);
    $y = mysqli_fetch_assoc($r);
    $id = $y['id'];
    $_SESSION['name'] = $id;
    $x = mysqli_num_rows($r);
    if ($x > 0) {
        echo "<br>You are successfully logged in";
        header("location:profile.php");
    } else {
        echo "<center><H1><br>INVALID DETAILS</H1></center>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<center>
    <body>
        <h2>Login page</h2>
        <form action="login.php" method="POST">
    
            Name: <input type="text"  name="name" required><br><br>
            Roll No: <input type="text"  name="rollno" required><br><br><br><br>
            <button type="login"  name="login"  >Login</button>
        </form>
    </body>

</center>

</html>