<?php
 $con=mysqli_connect('localhost','root','','farm_db');

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
    <form action="signup.php" method="post">
<label for="name">Name</label>
<input type="text" id="name" name="name"><br><br>
<label for="pass">Password</label>
<input type="text" id="pass" name="pass"><br><br>
<label for="name">Email</label>
<input type="text" id="email" name="email"><br><br>
<label for="name">Phone number</label>
<input type="text" id="number" name="number"><br><br>
<input type="submit" value="send" name="Send">
    </form>
</body>
</html>

<?php
if(isset($_POST['Send'])){
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $phonenumber=$_POST['number'];


    
$query = "INSERT INTO admin_reg(name,password,email,phone_number) Values('$name','$password','$email','$phonenumber')";
$results = mysqli_query($con,$query);
if($results){
    echo'data successfully inserted';
}else{
    echo"failed";
}
}
?>