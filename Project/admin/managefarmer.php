<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="">
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td></td>
</tr>
<tr>
    <td>
    <?php
$con=mysqli_connect('localhost','root','','farm_db');
$query="select * from farmer_reg";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){

    $Id= $row["id"];
    $Name=$row['name'];
    $Password=$row['password'];
    $Email= $row['email'];
    $Address= $row['address'];
    $Phone_number=$row['phone_number'];
    $Products=$row['products'];
    $_SESSION['Id']=$row['id'];
}
?>

        <table width="100%"  cellspacing="0" cellpadding="0">
<tr>
    <td>Id</td>
    <td>  <div><strong> <?php echo $Id; ?> </strong></div> </td>
</tr>

        <tr>
        <td>Farmer Name</td>
        <td>  
  <div><strong> <?php echo $Name; ?> </strong></div> 
     </td>
        </tr>
        <tr>
<td><div><strong>Password</strong> </div></td>
<td>
        <div> <strong> <?php echo $Password ?> </strong> </div>
     </td>
        </tr>
        <tr>
            <td><div><strong>Email</strong></div></td>
            <td>
        <div> <strong> <?php echo $Email ?> </strong> </div>
     </td>
        </tr>
        <tr>
            <td><div> <strong>Address</strong> </div></td>
            <td>
        <div> <strong> <?php echo $Address ?> </strong> </div>
     </td>
        </tr>
        <tr>
            <td> <div><strong>Phone Number</strong></div></td>
            <td>
        <div> <strong> <?php echo $Phone_number ?> </strong> </div>
     </td>
        </tr>
        <tr>
            <td> <div> <strong>Products</strong> </div></td>
          <td><div> <strong> <?php echo $Products ?> </strong> </div></td>  
        </tr>

        <tr>
           <td><div> <strong>Delete</strong> </div></td>
           <td>
       <a href="Delete.php"> Delete </a>
     </td>
        </tr>

        <tr>
            <td><div> <strong>Approve</strong> </div></td>
            <td><a href="Approve.php"> Approve </a></td>
        </tr>

    </td>
</tr>
        

        </table>

        </table>
    </form>
</body>
</html>