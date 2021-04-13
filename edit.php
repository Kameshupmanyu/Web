<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="edit.php"> 
            Username: <input type="text" name="username" required><br>
            Email: <input type="email" name="email" required><br>
            Contact: <input type="text" name="contact" required><br>
            City: <select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Mathura">Mathura</option>
                <option value="Delhi">Delhi</option>
            </select><br>
            <input type="submit" name="submit" value="Update">
            </form>
    </body>
</html>