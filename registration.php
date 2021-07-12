<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";
$con = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $q = "SELECT * FROM testing WHERE name='$name'";
    $r = mysqli_query($con, $q);
    $y = mysqli_num_rows($r);

    if ($y > 0) {

        echo "<br>Username already exists";
    } else {
        $sql = "INSERT INTO testing (name,rollno,address,gender) VALUES ('$name','$rollno','$address','$gender')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<br>You Have Successfully Registered";
            header("location:login.php");
        } else {
            echo "<br>SORRY THERE IS SOME ISSUE";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
</head>

<center>

    <body>
        <h2 class="text-center">Registration page</h2>

        <form action="registration.php" method="POST">

            Name: <input type="text" name="name" required><br><br>
            Roll No: <input type="text" name="rollno" required><br><br>
            Address: <input type="text" name="address" required><br><br>
            Select Gender: Male <input type="radio" name="gender" value="Male">
            feMale <input type="radio" name="gender" value="feMale">
            other<input type="radio" name="gender" value="other"><br><br>

           <!-- Experience: <input type="checkbox" name="experience" value="Student">
           <input type="checkbox" name="experience" value="Professional"> -->

            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
        <br><br>
        <label>If you are already user</label>
        <button><a href="login.php">LOGIN</a></button>
    </body>

</center>

</html>