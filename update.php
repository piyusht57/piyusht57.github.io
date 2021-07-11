<?php
include 'conn.php';
$id = $_GET['id'];
$query = "SELECT * FROM add1 WHERE id=$id";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result)) {
    $n = mysqli_fetch_assoc($result);
    $name = $n['name'];
    $email = $n['email'];
    $address = $n['address'];
    $gender = $n['gender'];
}
if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $q = "update add1 set id=$id,name ='$name',email='$email',address='$address',gender='$gender' where id=$id ";

    $query = mysqli_query($con, $q);
    header('location:read.php');
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
                <br><br>

                <h1>Update Operation</h1>
                Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
                Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
                Address: <input type="text" name="address" value="<?php echo $address; ?>"><br><br>
                Select Gender: Male <input type="radio" name="gender" value="Male">
                feMale <input type="radio" name="gender" value="feMale">
                other<input type="radio" name="gender" value="other"><br><br>

                <button type="submit" name="submit">Submit</button>

            </form>
        </div>
    </center>
</body>

</html>