<?php
include ('config.php')
?>

<?php
$id=$_GET['id'];
$sql="select * from `users` where `id`=$id";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$username=$row['username'];
$email=$row['email'];
$contact=$row['contact'];
$city=$row['city'];
?>
<?php
if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    
    $sql="update users set username='$username',email='$email',contact='$contact',city='$city' where id='$id'";
    if(mysqli_query($conn,$sql))
    {
        echo "Data Updated Successfully..";
        //if needs to redirect the page to some other page
         header("Location:details.php");
    }
    else
    {
        echo "Updation Failed..";
    }
}
?>


<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="edit.php?id=<?php echo "$id"?>"> 
            Username: <input type="text" value=<?php echo "$username"?> name="username" required><br>
            Email: <input type="email" value=<?php echo "$email"?> name="email" required><br>
            Contact: <input type="text" value=<?php echo "$contact"?> name="contact" required><br>
            City: <select name="city" value=<?php echo "$city"?>>
                <option value="Dehradun" <?php if($city=='Dehradun'){ echo "selected";} ?>>Dehradun</option>
                <option value="Mathura" <?php if($city=='Mathura'){ echo "selected";} ?>>Mathura</option>
                <option value="Delhi" <?php if($city=='Delhi'){ echo "selected";} ?>>Delhi</option>
            </select><br>
            <input type="submit" name="update" value="Update">
            </form>
    </body>
</html>