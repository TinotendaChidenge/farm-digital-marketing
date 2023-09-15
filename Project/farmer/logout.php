<?php

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location : C:/xampp/htdocs/Project/index.php");
    exit;

}

?>

<!DOCTYPE html>
<html>
	<head>
    </head>

	<body>
	   <?php
            require 'index.php';
        ?>
	</body>
</html>
