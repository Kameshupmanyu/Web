<?php
include ('config.php');
?>

<?php
$sql= "select * from users";
$res=mysqli_query($conn,$sql);
if($res->num_rows >0)
{  ?>

    <table border=10px>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //while($row=$res->fetch_array()){ 
                while($row=$res->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']?>">
                    <input type="button" value="Edit"></a></td>
                    <td><input type="button" value="Delete"></td>
                </tr>
               <?php }
               ?>
            </tbody>
        </table>
  <?php }
?>
