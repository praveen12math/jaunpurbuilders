<?php
include('header.php');
$user = $_SESSION['id'];
$user = "user$user";
$conn1 = mysqli_connect('localhost','root','','buss_user');
$result1 = mysqli_query($conn1,"select * from $user");
$total = 0;
 ?>

 !<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel ="icon" href="img/32X32.png" type="image/x-icon">
<title>
    jaunpurbuilders | Cart
</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://kit.fontawesome.com/3507771cb9.js" crossorigin="anonymous"></script>
 </head>
 <body>
   


<br><br><br><br><br><br>
<div class="container">

    <?php
    if(mysqli_num_rows($result1)>0)
{
     ?>
  <table class="table">
    <thead>
      <tr>
        <th style="font-size: 40px;font-family: amita">Cart</th>
        <th style="font-size: 15px">Product Name</th>
        <th style="font-size: 15px">Price ( <i class="fas fa-rupee-sign"></i>)</th>
        <th style="font-size: 15px">Quantity</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php  while($row1=mysqli_fetch_array($result1))
      {
        $key = $row1['id'];

        ?>
      <tr>
        <td style="width:13%"><img src="product/<?php echo $row1['productName'];?>.png" style="width:100%"></td>
          <td><?php echo $row1['productName']; ?></td>
          <td><?php echo $row1['price']*$row1['quantity']; ?></td>
            <td><?php echo $row1['quantity']; ?></td>
            <td><?php echo $row1['type']; ?></td>
            <?php $total = $total+($row1['price']*$row1['quantity']); ?>
          <td><a href="cartDelete.php?id=<?php echo $_SESSION['id']; ?>&key=<?php echo $key; ?>"><i class="fas fa-trash"></i></a></td>
      </tr>
    <?php }
?>
    </tbody>
  </table>
  </div>

  <div style="font-family:amita; font-size:30px;text-align: center">Total  <i class="fas fa-rupee-sign"></i>

  <?php echo $total; ?>
  </div>

  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
  <a href="placeCart.php">
    <button class="btn btn-warning" style="width:100%;font-family:amita">Place Order</button>
      </a>
</div>
  <div class="col-4"></div>
</div>
  <?php
}
else{
  ?>
  <h1>Your Cart is Empty</h1>
  <?php
}
   ?>

<br>

 </body>
 </html>


<style>
.row{
  margin-left: 0px;
  margin-right: 0px;
}
</style>
