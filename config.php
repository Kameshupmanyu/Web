<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="new";

$conn=mysqli_connect($hostname,$username,$password,$databaseName);

if($conn)
{
     echo "Connection Succesfull...";
}
else
{
    echo "Connection Failed..."+mysqli_connect_error();
}
?>