<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
$con=mysqli_connect('localhost','root','','farm_db');
$query="SELECT * from farmer_reg";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){

    $Name=$row['name'];
    $Email= $row['email'];
    $Address= $row['address'];
    $Phone_number=$row['phone_number'];
    $Product=$row['products'];
}
?>

        <table width="100%"  cellspacing="0" cellpadding="0">


        <tr>
        <td>Farmer Name</td>
        <td>  
  <div><strong> <?php echo $Name; ?> </strong></div> 
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
    <td>Products</td>
    <td>  <div><strong> <?php echo $Product; ?> </strong></div> </td>
</tr>

</table>
<a href ="buynow.php">
<input type="submit" value="BuyNow" name="send" />
</a>
</body>
</html>