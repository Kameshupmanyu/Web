<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from users where id='$id'";
if(mysqli_query($conn,$sql))
{
    echo "row deleted with id='$id'";
}
else{
    echo "Deletion falied";
}
?>