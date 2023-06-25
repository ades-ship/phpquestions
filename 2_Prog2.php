<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn)
    {
        die("connection failed". mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 2</title>
</head>
<body>
    <form action="" method="POST">
        <label>Enter Username: </label>
        <input type="text" name="name" id="name">

        <label>Enter Password: </label>
        <input type="text" name="password" id="password">

        <button type="submit" name="submit">Login</button>
    </form>


    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $sql = "SELECT * from student WHERE name='$name' AND password='$password'";

            if(mysqli_query($conn, $sql))
                echo "Verified <br>";
            else
                echo "Not Verified <br>";
        }
    ?>
</body>
</html>