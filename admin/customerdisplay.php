<?php
 session_start();
 if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <title>online Bus service</title>
</head>
<body class="cbg-img">
  <?PHP
       include_once("../include/adminheader.php");
  ?>
       <div class="title">
       <h1>Customer Details</h1>
       </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <table class="table  table-striped table-hover table-bordered table-xl table-responsive-xl">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Address</th>
                <th>Age</th>
                <th>Phone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <?php 
            //$search=$_POST['search'];
            include("../db_conn/connection.php");
             $q="SELECT * FROM `customer_login`";
             $result=mysqli_query($connection,$q);
             while ($res=mysqli_fetch_assoc($result)){   
     ?>
            
            <tbody>
              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['c_name'];?></td>
                <td><?php echo $res['c_password'];?></td>
                <td><?php echo $res['address']; ?></td>
                <td><?php echo $res['age']; ?></td>
                <td><?php echo $res['phone']; ?></td>
                <td><button><a href="customeredit.php?id=<?php echo $res['id'];?>">Edit</a></button></td>
                <td><button><a href="customerdelete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
              </tr>
            </tbody>
        <?php 
   	   } ?>
   	   
          </table>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>