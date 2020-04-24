<?php
// Include database connection file
require_once "connection.php";
 
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['userid'] . "'");
    $row= mysqli_fetch_array($result);
   
?>
  
<!DOCTYPE html>
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
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                             
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="users.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>