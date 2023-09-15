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
    <div class ="loginbox">
        <h1>SignUp</h1>
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
<label for="products">Products</label>
<br>
<input type="text" id="products" name="products">
<br><br>
<input type="button" value="Submit" name="Send">
    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['Send'])){
    $Status="Pending";
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phonenumber=$_POST['number'];
    $products=$_POST['products'];

    
$query = "INSERT INTO farmer_reg(name,password,email,address,phone_number,products,status) Values('$name','$password','$email','$address','$phonenumber','$products','$Status')";
$results = mysqli_query($con,$query);
if($results){
    echo'data successfully inserted';
}else{
    echo"failed";
}
}
?>