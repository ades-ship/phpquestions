
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="" method='post'></form>
<button onclick></button>
<?php
$servername="localhost";
$username="root";
$password="codelover156@~";
$dbname="tutorial";
// creating connection
$conn=new mysqli($servername,$username,$password,$dbname);

// checking connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}  
echo "connected sucessfully";

if($_POST['submit']=='[post'){
    $username1=$_POST['username'];
    $pass=$_POST['password'];


    if($username==$username1){
        if($pass==$password){
            echo "login";
        }else{
            echo "invalid password";
        }
    }else{
        echo "invalid usernaeme";
    }


}

// $sql="create database tutorial";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "database created<br>";
// } else{
//     echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
// }

// Create a table in the db
// $sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
// $result = mysqli_query($conn, $sql);

// // Check for the table creation success
// if($result){
//     echo "The table was created successfully!<br>";
// }
// else{
//     echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// } 

// Variables to be inserted into the table
// $name = "Vikrant";
// $destination = "Russia";

// // Sql query to be executed
// $sql = "INSERT INTO `phptrip` (`sno`, `name`,`dest`) VALUES (1,'$name', '$destination')";
// $sql = "INSERT INTO `phptrip` (`name`,`dest`) VALUES ('nitish', 'india')";
// $result = mysqli_query($conn, $sql);


// Add a new trip to the Trip table in the database
// if($result){
//     echo "The record has been inserted successfully successfully!<br>";
// }
// else{
//     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }
?>
</body>
</html>