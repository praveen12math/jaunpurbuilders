<?php
    $conn = mysqli_connect('localhost','root','','buss');
    $sql="delete from contactus where id='".$_GET["id"]."'";
    if(mysqli_query($conn,$sql))
    {
        header("location: contactus_data.php");
    }
    else{
    echo "Something Error";
    echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>