<?php

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location : C:\xampp\htdocs\Project\index.php");
    exit;
    require 'C:\xampp\htdocs\Project\index.php';

}

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

</body>
</html>
