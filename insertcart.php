<?php
session_start();
$user = $_SESSION['id'];
$user = "user$user";
$name = $_GET['name'];
$price = $_GET['price'];
$qnt = $_POST['quantity'];
$type = $_GET['type'];
  $conn = mysqli_connect('localhost','root','','buss_user');
  mysqli_query($conn,"insert into $user(productName,price,quantity,type) values ('$name','$price','$qnt','$type')");
  header('location: index.php');
 ?>
