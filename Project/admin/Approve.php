<?php
session_start();
?>
<?php
$con=mysqli_connect('localhost','root','','farm_db');
$Id=$_GET['id'];
$State="Approved";
$sql="Update farmer_reg set status='$State' where id='$Id'";
if(mysqli_query($con,$sql)){
    echo"User successfully approved";
}else{
    echo'failed to approve user';
}
mysqli_close($con);

?>