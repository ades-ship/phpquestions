<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_POST['submit']))
{
$ecode = $_POST['cd'];
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


$sql="delete from emp WHERE code='$ecode'";
if (mysqli_query($conn, $sql)) 
{
echo "Record deleted successfully";
} 
else
 {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
