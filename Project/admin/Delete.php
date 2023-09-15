<?php
  session_start();
?>

<?php
$ID=$_SESSION['id'];
$con=mysqli_connect('localhost','root','','farm_db');
    
   $sql="delete from farmer_reg where id='.$ID.'";
  if(mysqli_query($con,$sql) ){
    echo'<script type="text/javascript">alert("Deleted Successfully");window.location=\'managefarmer.php\'; </script>';
  }   
  mysqli_close($con);
?>