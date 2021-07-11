<center>
    <table border=1px>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Upadte</th>
            <th>Delete</th>
        </tr>
    
        <?php
        include 'conn.php';
        $q = "select * from add1";
    
        $query = mysqli_query($con, $q);
        while ($res = mysqli_fetch_array($query)) {
    
        ?>
    
            <tr>
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['name']; ?> </td>
                <td><?php echo $res['email']; ?> </td>
                <td> <?php echo $res['address']; ?> </td>
                <td> <?php echo $res['gender']; ?> </td>
                <td><button><a href="update.php?id=<?php echo $res['id']; ?> " style="text-decoration: none">Upadte</a></button></td>
                <td><button><a href="delete.php?id=<?php echo $res['id']; ?> " style="text-decoration: none">Delete</a></button></td>
            </tr>
        <?php
        }
        ?>
    
    </table>

</center>

<br><br><br><br>
<center>

    <button><a href="create.php" style="text-decoration: none" > Go Back To Create Page</a></button>
</center>