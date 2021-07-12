<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";
$con = mysqli_connect($servername, $username, $password, $database);

$id = $_SESSION['name'];

$sql = "SELECT * FROM testing WHERE id='$id'";
$result = mysqli_query($con, $sql);
$x = mysqli_num_rows($result);

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile </title>
</head>

<center>
    <body>
        <h1 class="text-center">Profile page</h1>
    
        <table border="1px">
            
                <tr>
                    <th>S NO.</th>
                    <th>Name</th>
                    <th>Roll no.</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            <?php
            $sql1 = "SELECT * FROM testing where id='$id'";
            $result1 = mysqli_query($con, $sql1);
            while ($a = mysqli_fetch_assoc($result1)) {
            ?>
                    <tr>
                        <td><?php echo $a['id']; ?></td>
                        <td><?php echo $a['name']; ?></td>
                        <td><?php echo $a['rollno']; ?></td>
                        <td><?php echo $a['address']; ?></td>
                        <td> <?php echo $a['gender']; ?> </td>
                        <td><a href="update.php?id=<?php echo $a['id']; ?>" style="text-decoration: none"> Edit </a></td>
                        <td><a href="delete.php?id=<?php echo $a['id']; ?>" style="text-decoration: none" style="color: black;"> To delete your profile click here </a></td>
    
                    </tr>
                </table>
            <?php
            }
            ?>
        </table>
    
    </body>

</center>
</html>