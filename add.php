<?php
include ('config.php');
?>
<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];

$sql="INSERT INTO `users` (`username`, `email`, `contact`, `city`) VALUES ('$username', '$email', '$contact', '$city')";
mysqli_query($conn,$sql);
}
else
{
echo "click Submit";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="add.php"> 
            Username: <input type="text" name="username" required><br>
            Email: <input type="email" name="email" required><br>
            Contact: <input type="text" name="contact" required><br>
            City: <select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Mathura">Mathura</option>
                <option value="Delhi">Delhi</option>
            </select><br>
            <input type="submit" name="submit" value="Click to Submit">
            </form>
    </body>
</html>






<?php

?>