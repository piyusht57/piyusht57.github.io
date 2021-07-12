<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
</head>
<center>

    <body>
        <div class="container mt-3">
            <h2>Please enter data </h2>
            <form class="form" action="" method="POST">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "demo";
                $con = mysqli_connect($servername, $username, $password, $database);
                $id = $_GET['id'];
                $sql = "SELECT * FROM testing WHERE id=$id";
                $result = mysqli_query($con, $sql);
                $result1 = mysqli_fetch_array($result);

                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $rollno = $_POST['rollno'];
                    $address = $_POST['address'];
                    $gender = $_POST['gender'];

                    $sql = "UPDATE testing SET name = '$name',rollno='$rollno', address='$address',gender=$gender WHERE id = $id";
                    $result = mysqli_query($con, $sql);

                    header("location:profile.php");
                }
                ?>
                Name: <input type="text" name="name" id="name" value="<?php echo $result1['name']; ?>"><br><br>
                Rollno: <input type="Number" name="rollno" id="rollno" value="<?php echo $result1['rollno']; ?>"><br><br>
                Address:<input type="text" name="address" id="address" value="<?php echo $result1['address']; ?>"><br><br>
                Select Gender: Male <input type="radio" name="gender" value="Male">
                feMale <input type="radio" name="gender" value="feMale">
                other<input type="radio" name="gender" value="other"><br><br>

                <br><br><br>
                <button type="submit" name="submit">Update</button>
            </form>
    </body>

</center>

</html>