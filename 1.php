

<html>
    <head>
        <title>My Page</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <body>
            <form method="POST" action="1.php">
                first:<input type="number" name="var1"><br>
                second:<input type="number" name="var2"><br>
                <input type="submit" name="submit">
            </form>
        </body>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
$sum= $_POST['var1']+$_POST['var2'];
echo "sum of first and Second=$sum";}
else
  echo "No Input"
?>