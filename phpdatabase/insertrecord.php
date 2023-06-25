<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_POST['submit']))
{
$ename = $_POST['name'];
$ecode = $_POST['code'];
$edesig = $_POST['designation'];
$esal = $_POST['salary'];
$servername = "localhost";
$username = "root";
$password = "codelover156@~";
$dbname = "mydb";
//create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
 {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO emp VALUES ('$ename','$ecode','$edesig','$esal')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
