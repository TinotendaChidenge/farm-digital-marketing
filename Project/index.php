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
	<link rel="stylesheet" type="text/css"  href="style2.css">
</head>
<body>	
	<div class="loginbox">
		<h1>Login</h1>
			<form  action="index.php" method="post">
								<div>
									<p>Usertype</p>
										<input type="radio" name="usertype" id="type" value="Admin" required/>Admin
										<input type="radio" name="usertype" id="type" value="buyer" required/>buyer
										<input type="radio" name="usertype" id="type" value="farmer" required/>farmer
								</div>
									<div>
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
									<div>
										<input type="password" name="pass" id="pass" value="" placeholder="Password"required/>
									</div>
									 <div class="form">
											<input type="submit" value="Login" name="send" />
									  </div>
									  <a href="clientlog.php">Lost your password?</a><br>
									  <a href="clientlog.php">Dont have an account?</a>

			</form>
    </div>
						
</body>
</html>
  <?php
  $con=mysqli_connect('localhost','root','','farm_db');
if(isset($_POST['send'])){
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	$usertype = $_POST['usertype'];

	if($usertype=='Admin'){
   $query = "SELECT* FROM admin_reg";
      $results=mysqli_query($con,$query);
	  $data=mysqli_fetch_assoc($results);
		if($data['name']==$username && $data['password']==$password){
			header("Location: admin/menu.php ");
			$_SESSION['name']==$data['name'];
		}else{
			echo'incorrect username or password';
		}
	  
     
	}elseif($usertype=="buyer"){
		$query = "SELECT* FROM buyer_reg";
      $results=mysqli_query($con,$query);
	  $data=mysqli_fetch_assoc($results);
		if($data['name']==$username && $data['password']==$password){
			header("Location: buyer/menu.php ");
		}else{
			echo'incorrect username or password';
		}
	}elseif($usertype=="farmer"){
		$query = "SELECT* FROM farmer_reg";
      $results=mysqli_query($con,$query);
	  $data=mysqli_fetch_assoc($results);
		if($data['name']==$username && $data['password']==$password){
			header("Location: farmer/menu.php ");
		}else{
			echo'incorrect username or password';
		}
	}else{
		header("Location: clientlog.php");
	}
		
	
}
  ?>