<?php
session_start();
if ((isset($_SESSION['a_name']) && isset($_SESSION['a_password'])) || (isset($_SESSION['c_name']) && $_SESSION['c_password'])) {
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Online Bus Service</title>
    <style>
      .form-control{
        margin: 5px;
       
       
      }
      form{
        padding:5px;
        margin: 10px;
      }
      label{
        margin:10px;
        font-size: 20px;
      }
    .field{
      
      }
      
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <i class="bi bi-bus-front">
        </i> Online Bus service</a>
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
              <a class="nav-link" href="customeredit.php"></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Book ticket
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="customer/Booking/book.php">Book Ticket</a></li>
                <li><a class="dropdown-item" href="rootdisplay.php">Root details</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="customer/login.php">login</a></li>
                <li><a class="dropdown-item" href="customer/register.php">Register</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex">

            <button class="btn btn-outline-dark"><a href="customer/logout.php">logout</a></button>
          </form>
        </div>
      </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="" method="post">
            <div class="form-control">
              <span class="field">
             <label for="source"  > Source</label>
               <input type="text"   name="source" required >
              </span>
              to:
               <span class="field">
                <label for="destination"  > Destination</label>
               <input type="text"   name="destination" required >
               </span>
              <button type="submit" class="btn btn-primary" name="search">sumbit</button>
           </div> 
          </form>
        </div>
      </div>
    </div>
    <?php
      include("db_conn/connection.php");
          if(isset($_POST['search'])){
            $source=$_POST['source'];
            $destination=$_POST['destination'];
            
            ?>
           <table class="table">
            <thead>
              <tr>
                <th>Bus Number</th>
                <th>source </th>
                <th>destination</th>
                <th>Date</th>
                <th>recive Ticket</th>
              </tr>
            </thead>
            <tbody>
                <?PHP
                   $q="SELECT * FROM `root` WHERE r_source='$source' And r_destinatin='$destination'  ";
                   $result=mysqli_query($connection,$q);
                  
                   while ($res=mysqli_fetch_assoc($result)){   
                    
                  ?>
                
                
             
              <tr>
                <td scope="row"><?php echo $res['b_number']; ?></td>
                <td><?php echo $res['r_source']; ?></td>
                <td><?php echo $res['r_destinatin']; ?></td>
                <td><?php echo $res['date']; ?></td>
                <td><button><a href="customer/Booking/contact.php?b_number=<?php echo $res['b_number'];?>">recive</a></button></td>
              </tr>
              <?PHP
                   }
              ?>
            </tbody>
           </table>

      <?php
          }
      ?>
          
    
  
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <img src="asset/img/bus.png" class="img-fluid" alt="..." style="">
          </div>
          <div class="col-lg-6 col-12">
            <h1>About</h1>
            <p>Buses are the most affordable means of transport with a large number of terminals across the country and
              convenient timetables to help you plan your trip. Buses is a convenient option both for those who travel on
              a shoestring budget and those who do not want to compromise on comfort. Dhaulagiri Yatayat offers bus
              service with an online reservation available. Before booking your ticket, read other travellers’ reviews to
              choose the best option.</p>
          </div>
        </div>
      </div>
    </section>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
  </body>

  </html>
  <?php
} else {
  header('location:customer/login.php');
}
?>