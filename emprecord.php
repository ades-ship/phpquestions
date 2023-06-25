<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="codelover156@~";
    $dbname="mydb";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    } 

    $sql="select * from emp";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) 
{
echo "<table border=1>";
echo "<tr>";
echo "<th>NAME</th>";
echo "<th>CODE</th>";
echo "<th>DESIGNATION</th>";
echo "<th>SALARY</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($result))
        {
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['code']."</td>";
echo "<td>".$row['designation']."</td>";
echo "<td>".$row['salary']."</td>";
echo "</tr>";
        }
echo "</table>";
mysqli_free_result($result); // close the resultset.
    }
else {
echo "No matching records are found.";
    }
mysqli_close($conn);

    ?>
</body>
</html>