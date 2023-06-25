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
    $dbname="employees";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("failed".mysqli_connect_error());
    } else {
        echo "successful";
    } 
    // create database
    //     $sql = "CREATE DATABASE employee";
    // if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
    // } else {
    // echo "Error creating database: " . $conn->error;
    // }
    // $sql = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50)
    //     )";

    // create table
// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
  
// insert into database
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('adesh', 'sengar', 'adesh@example.com')";
// if($conn->query($sql)==TRUE){
//     echo "data inserted success";
// }else{
//     echo "error";
// }

// retrieve data from database
$sql="select * from MyGuests";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>firstname</th>";
    echo "<th>lastname</th>";
echo "<th>email</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result))
        {
echo "<tr>";

echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['email']."</td>";
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