<?php
session_start();  
    ?>
<html>
<body>
<?php
echo "User is: ".$_SESSION["user"]; 
echo "password is: " .$_SESSION["pass"];
    ?>
<br>
<br>
<a href="http://localhost/phptutorial/session cookies/verify.php">verify password</a><br>
<a href="http://localhost/phptutorial/session cookies/logout.php">click here for logout</a>
</body>
</html>
<?php
session_start();  
    ?>

