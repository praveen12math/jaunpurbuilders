<?php
$conn=mysqli_connect('localhost','root','','buss');

    session_start();
    $result = mysqli_query($conn,"SELECT * FROM register WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($result);
    $_SESSION['point']= $row["id"];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="background-color: #c2e9fb;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 style="font-family: amita">Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="do_update.php" method="post">
                    <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Birthday:</label>
                            <input type="date" name="dob" class="form-control" value="<?php echo $row["dob"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="mobile" name="phone" class="form-control" value="<?php echo $row["phone"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $row["password"]; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
                        <a class="btn btn-default" href="welcome_admin" >Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css?family=Amita');
</style>
