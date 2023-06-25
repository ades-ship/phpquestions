<?php
session_start();  
    ?>
<html>
<body>
<?php
    $_SESSION["user"] = "geu";  
    $_SESSION["pass"] = "xyz";  
echo "Session information are set successfully.<br/>";  
    ?>
<a href="http://localhost/phptutorial/session cookies/welcome1.php">Visit next page</a>
</body>
</html>
