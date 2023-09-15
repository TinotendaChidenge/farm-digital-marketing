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
    <link rel="stylesheet" type="text/css"  href="signupstyle.css">
</head>
<body>
    <div class="loginbox">
            <h2>Sign up</h2>
    <form action="signup.php" method="post">
<label for="name">Name</label>
<br>  
<input type="text" id="name" name="name">
<br><br>
<label for="pass">Password</label>
<br>
<input type="text" id="pass" name="pass">
<br><br>
<label for="name">Email</label>
<br>
<input type="text" id="email" name="email">
<br><br>
<label for="name">Address</label>
<br>
<input type="text" id="address" name="address">
<br><br>
<label for="name">Phone number</label>
<br>
<input type="text" id="number" name="number">
<br><br>
<input type="submit" value="send" name="Send">
    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['Send'])){
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phonenumber=$_POST['number'];
    $state="Pending";

$query = "INSERT INTO buyer_reg(name,password,email,address,phone_number,status) Values('$name','$password','$email','$address','$phonenumber',$state)";
$results = mysqli_query($con,$query);
if($results){
    echo'data successfully inserted';
}else{
    echo"failed";
}
}
?>