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
$query="SELECT * from buyer_reg";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){

    $Name=$row['name'];
    $Email= $row['email'];
    $Address= $row['address'];
    $Phone_number=$row['phone_number'];
}
?>

        <table width="100%"  cellspacing="0" cellpadding="0">


        <tr>
        <td>Buyer Name</td>
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
</table>
</body>
</html>