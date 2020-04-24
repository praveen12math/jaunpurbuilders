<?php
$id = $_GET['id'];
$id = "user$id";
$key = $_GET['key'];
$conn1 = mysqli_connect('localhost','root','','buss_user');
mysqli_query($conn1,"delete from $id where id=$key");
header('location:cart.php');
 ?>
