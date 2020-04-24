<?php
    $conn = mysqli_connect('localhost','root','','buss');
    $conn1 = mysqli_connect('localhost','root','','buss_user');
    $sql = "delete from register where id='".$_GET["id"]."'";
    $sql1 = "delete from register1 where id='".$_GET["id"]."'";
    $user = $_GET["id"];
    $user = "user$user";
    $sql2 = "drop table $user";


    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1) && mysqli_query($conn1,$sql2))
    {
        header("location: welcome_admin.php");
    }
    else{
    echo "Something Error";
    echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
