<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "codelover156@~";
$dbname = "mydb";
$db="create table abcd(fname varchar(20),lname varchar(20))";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn->query($db))
{
    echo "success";
}
?>
// Check connection
// if (!$conn)
//  {
// die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT * FROM emp";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) 
// {
// echo "<table border=1>";
// echo "<tr>";
// echo "<th>NAME</th>";
// echo "<th>CODE</th>";
// echo "<th>DESIGNATION</th>";
// echo "<th>SALARY</th>";
// echo "</tr>";
// while ($row = mysqli_fetch_array($result))
//         {
// echo "<tr>";
// echo "<td>".$row['name']."</td>";
// echo "<td>".$row['code']."</td>";
// echo "<td>".$row['desig']."</td>";
// echo "<td>".$row['salary']."</td>";
// echo "</tr>";
//         }
// echo "</table>";
// mysqli_free_result($result); // close the resultset.
//     }
// else {
// echo "No matching records are found.";
//     }
// mysqli_close($conn);
// ?>
// </body>
// </html>
