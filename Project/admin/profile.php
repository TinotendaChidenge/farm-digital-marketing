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
  $con=mysqli_connect('localhost','root','','farm_db');   
  $query="SELECT * from admin_reg";
  $result = mysqli_query($con,$query);
  while( $data=mysqli_fetch_assoc($result)){
$id=$data['id'];
$Name=$data['name'];
$password=$data['password'];
$email=$data['email'];
$phoneNumber=$data['phone_number'];
} 
    ?>
<form action="profile.php" method="post">
<table>
<tr>
    <td>Id</td>
    <td>  <div><strong> <?php echo $id; ?> </strong></div> </td>
</tr>

        <tr>
        <td>Admin name</td>
        <td>  
  <div><strong> <?php echo $Name; ?> </strong></div> 
     </td>
        </tr>
        <tr>
<td><div><strong>Password</strong> </div></td>
<td>
        <div> <strong> <?php echo $password ?> </strong> </div>
     </td>
        </tr>
        <tr>
            <td><div><strong>Email</strong></div></td>
            <td>
        <div> <strong> <?php echo $email ?> </strong> </div>
     </td>
        </tr>
        
        <tr>
            <td> <div><strong>phoneNumber</strong></div></td>
            <td>
        <div> <strong> <?php echo $phoneNumber ?> </strong> </div>
     </td>
        </tr>

        
</tr>
        
</table>

</form>

</body>
</html>