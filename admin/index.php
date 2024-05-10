<?php
 session_start();
 if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
 
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <title>Online Bus Service</title>
 </head>
 <body class="">  
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
              <li><a class="dropdown-item" href="root.php"> Root Display</a></li>
             
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          
          <button class="btn btn-outline-dark"><a href="logout.php">logout</a></button>
        </form>
      </div>
    </div>
  </nav>

  
  
      <div class="section">
      <div class="row">
        <img src="../asset/img/photo.avif" class="img-fluid" alt="...">
      </div>
    </div>
      
      
  </section>

<!--
<section>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-12">
                <div class="title">
              <h1>Root</h1>
             </div>
                <table class="table  table-striped table-hover table-bordered table-xl table-responsive-xl">
                <thead>
                    <tr>
                    <th scope="col">Bus Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Drive Number</th>
                        <th scope="col">Source</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Price</th>
                        <th scope="col">Avaiable seats</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
             include '../db_conn/connection.php';
             $q="SELECT * FROM `root`";
             $result=mysqli_query($connection,$q);
             while ($res=mysqli_fetch_assoc($result)){   
            ?>
                    <tr>
                    <td><?php echo $res['b_number']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['d_phone']; ?></td>
                        <td><?php echo $res['r_source']; ?></td>
                        <td><?php echo $res['r_destinatin']; ?></td>
                        <td><?php echo $res['price']; ?></td>
                        <td><?php echo $res['avaiable_seats']; ?></td>
                        <td><button><a href="editroot.php?b_number=<?php echo $res['b_number'];?>">Edit</a></button></td>
                        <td><button><a href="rootdelete.php?b_number=<?php echo $res['b_number'];?>">Delete</a></button></td>
                    </tr>
                    <?php
                    }
                    mysqli_close($connection);
                    ?>
                </tbody>
                  </table>                  
                 </div>
            </div>
        </div>
    </section>
                  -->
    <div class="contianer">
    <div class="row">
         <div class="col-lg-6 col-md-12 col-12">
         <img src="../asset/img/bus.png" class="img-fluid" alt="..." style="">
       
         </div>
         <div class="col-lg-6 col-md-12 col-12">
         <h1>About</h1>
          <p>Buses are the most affordable means of transport with a large number of terminals across the country and convenient timetables to help you plan your trip. Buses is a convenient option both for those who travel on a shoestring budget and those who do not want to compromise on comfort. Dhaulagiri Yatayat offers bus service with an online reservation available. Before booking your ticket, read other travellers’ reviews to choose the best option.</p>
       
         </div>
    </div>
</div>
                  
<!--

-->
<?php
  include_once("../include/footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>