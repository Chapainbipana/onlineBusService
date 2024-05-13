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
              <li><a class="dropdown-item" href="root.php">Root Display</a></li>
             
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
       <h1>Rececive ticket</h1>
       </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
            <table class="table  table-striped table-hover table-bordered table-xl table-responsive-xl">
            <thead>
              <tr>
                
                <th>Name</th>
                <th>Rececive Date</th>
                <th>Price</th>
                
                <!--<th scope="col">Edit</th>-->
                <!--<th scope="col">Delete</th>-->
              </tr>
            </thead>
            <tbody>

            <?php
         include("../db_conn/connection.php");
          $b_num= $_GET['b_number'];
          $q="SELECT * FROM `transactions` where b_number='$b_num' ";
          $result=mysqli_query($connection,$q);
          while ($res=mysqli_fetch_assoc($result)){  
            ?>
            <tr>
                
            
                <td><?php echo $res['c_name'];?></td>
                <td><?php echo $res['date'];?></td>
                <td>Rs <?php echo $res['price']; ?></td>
                
              </tr>
          
  
  <?php
  }
  ?>
  </tbody>
            </table>
            </div>
        </div>
    </div>


  </body>
  </html>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>