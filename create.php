<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql_e = "select * from add1 where email ='$email'";

    $res_e = mysqli_query($con, $sql_e);
    if (mysqli_num_rows($res_e) > 0) {
        echo "email already exist";
    } else {
        $q = "INSERT INTO `add1` (`name`, `email`, `address`, `gender`)
         VALUES ('$name','$email','$address', '$gender')";
        $query1 = mysqli_query($con, $q);
        if ($query1) {
            echo "data inserted successfully";
        } else {
            echo "error:" . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <center>
        <div class="container">
            <form action="" method="post">
                Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
                Email: <input type="text" name="email" placeholder="Enter your mail"><br><br>
                Address: <input type="text" name="address" placeholder="Enter your address"><br><br>
                Select Gender: Male <input type="radio" name="gender" value="Male">
                feMale <input type="radio" name="gender" value="feMale">
                other<input type="radio" name="gender" value="other"><br><br>



                <button type="submit" name="submit">Submit</button>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <button><a href="read.php"  style="text-decoration: none">Check Your Details</a></button>
            </form>
        </div>
    </center>
</body>

</html>