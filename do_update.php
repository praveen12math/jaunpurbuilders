<?php
session_start();
$conn = mysqli_connect('localhost','root','','buss');
$none = $_SESSION['point'];
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $sql = "Update register SET name='$name', dob='$dob', email='$email',
  phone='$phone', password='$password' WHERE id= $none ";
  mysqli_query($conn,$sql);
  header("location: welcome_admin.php");
 ?>
 