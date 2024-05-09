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
<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.php">Online Bus service</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/customerdisplay.php">Customer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Bus Detials 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="add.php">Add Bus</a></li>
              <li><a class="dropdown-item" href="busdisplay.php">display Bus Detials</a></li>
            </ul>
          </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Root
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="addroot.php">Add Root</a></li>
             
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          
          <button class="btn btn-outline-dark"><a href="logout.php">logout</a></button>
        </form>
      </div>
    </div>
  </nav>

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