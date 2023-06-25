<?php

session_start();
?>
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
echo "User is: ".$_SESSION["user"];  
echo "Hello: " .$_SESSION["user"];
    ?>
<br>
<br>
<a href="http://localhost/phptutorial/session cookies/session1.php">go back</a><br>
<a href="http://localhost/phptutorial/session cookies/logout.php">click here for logout</a>

</body>
</html>