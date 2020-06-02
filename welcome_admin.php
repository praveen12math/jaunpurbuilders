<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div class="row">
      <div class="col-2" style="font-family: amita;font-size:20px"><a href="contactus_data"><i class="fas fa-phone" style="font-size:30px"></i> Contact-us Data</a>
        </div>

        <div class="col-8" style="font-size:50px;text-align: Center; color: blue;font-family: amita;">Welcome Admin
            </div>
            <div id="log" class="col-2" style="font-family: amita;font-size:20px"><a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size:30px"></i></a>
        </div>

            </div>
<?php
$_SESSION['user']='admin';
$conn = new mysqli('localhost', 'root', '', 'buss');
    $result=mysqli_query($conn,"Select register.*,register1.* from register INNER JOIN register1 ON register.id=register1.id");

    if(mysqli_num_rows($result)>0)
    {
?>


        <table class="table table-bordered table-striped table-dark">
    <tr>
                     <thead>   <td><b>Id</b></td>
                        <td><b>Name</b></td>
                        <td><b>DOB</b></td>
                        <td><b>Email id</b></td>
                        <td><b>Mobile</b></td>
                        <td><b>Password</b></td>
                        <td><b>Date Created</b></td>
                        <td><b>Image</b></td>
                      </tr></thead>
                      <?php
                      $i=0;
                      while($row=mysqli_fetch_array($result)){
                          ?>

                          <tr>
                          <td><?php echo $row['id']; ?> </td>
                          <td><?php echo $row['name']; ?> </td>
                          <td><?php echo $row['dob']; ?> </td>
                          <td><?php echo $row['email']; ?> </td>
                          <td><?php echo $row['phone']; ?> </td>
                          <td><?php echo $row['password']; ?> </td>
                          <td><?php echo $row['time']; ?> </td>
                         <td><img src="<?php echo $row['image'] ?>"
                            height="100px" width="100px"></td>
                          <td><a href="update?id=<?php echo $row["id"]; ?>"title='Edit Record'><i class="fas fa-edit"></i></a></td>
                          <td><a href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><i class="fas fa-trash"></i></a></td>
                          </tr>

                    <?php
                    $i++;
                      }
                      ?>
                      </table>
                      <?php
                      }
                      else{
                          echo "No data found";
                      }
                      ?>


<style>
     @import url('https://fonts.googleapis.com/css?family=Amita');
          body{
            background-color: #c2e9fb;
}
.row{
    margin-left: 0px;
    margin-right: 0px;
}
.fas{
        line-height: 2;
}
#log{
    text-align: right;
}
    </style>
