<?php
session_start();
?>
<?php
 if (isset($_SESSION['c_name'])&&$_SESSION['c_password']){
 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <title>online bus service</title>
    <style>
    .container{
      padding-top: 70px;
    }
      .footer {
    background-color: #343a40;
    color: #fff;
    /*padding: 20px 0;*/
    text-align: center;
  }
  .footer-social-icons ul {
    list-style: none;
    padding: 0;
    margin-bottom: 10px;
  }
  .footer-social-icons ul li {
    display: inline-block;
    margin-right: 10px;
  }
  .footer-social-icons ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
  }
  .footer-social-icons ul li a:hover {
    color: #ffd700;
  }
  .footer p {
    margin: 0;
    font-size: 14px;
  }
  .footer p a {
    color: gold;
    text-decoration: none;
  }
  .footer p a:hover {
    text-decoration: underline;
  }
  th,td{
    padding: 70px;
  }
  .bg-img{
background-image: url(asset/img/photo.avif);
background-repeat: no-repeat;
background-position: center; 
background-color: lightslategray;
background-size: cover;
/*max-width: 100%;
height: auto;*/
  }
    </style>
</head>
<body class="bg-img" >
    
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning shadow">
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="rootdisplay.php">Root view</a>
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
    <section>
    
        <div class="container ">
            <div class="row">
           
              <h1 class="text-center">Route</h1>
            
        
                <div class="col-lg-12 col-md-12 col-12">
                <table class="table  table-striped table-hover table-bordered table-xl table-responsive-xl">
                <thead>
                    <tr>
                        <th scope="col">Bus Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Drive Number</th>
                        <th scope="col">Source</th>
                        <th scope="col">Destination</th>
                        
                        <th scope="col">Ticket Price</th>
                        <th scope="col">Avaiable seats</th>
                        <th scope="col">Receive Ticket</th>
                        
                    </tr>
                </thead>
                

                <?php
             include 'db_conn/connection.php';
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
                        <td>Rs<?php echo $res['price']; ?></td>
                        <td><?php echo $res['avaiable_seats']; ?></td>
                        <td><button class="btn btn-warning"><a href="customer/receiveticket.php?b_number=<?php echo $res['b_number'];?>">Receive Ticket</a></button></td>
                    </tr>
                       
             
              

              
             

                    <?php
                    }
                    mysqli_close($connection);
                    ?>
              
              </table>               
                 </div>
            
        </div>
        </div>
    </section>
    
   <!-- <section>
      <div class="container">
        <div class="row" style="height: 140px";>
          <div class="col-5">
            <div>
              Bus Number:
              
              Drive Number:
              Avaiable seats:
              <button>BUY TicKet</button>
            </div>
          </div>
          <div class="col-5"></div>
          <div class="col-2"></div>
        </div>
      </div>
    </section>
                  -->
                  <section>
      <div class="container">
        <div class="row" style="height: 130px";>
          <div class="col-5"></div>
          <div class="col-5"></div>
          <div class="col-2"></div>
        </div>
      </div>
    </section>
    
    <section>
<div class="footer bg-secondary">
  <div class="row">
    <div class="col-12">
     <!-- <div class="footer-social-icons d-flex justify-content-around ">
        <ul>
          <li><a target="_blank" class="facebook" href="https://www.facebook.com/Bipanachapain/"><span>Facebook</span></a></li>
          <li><a target="_blank" class="twitter" href="https://github.com/chapainbipana"><span>GitHub</span></a></li>
          <li><a target="_blank" class="gmail" href="#"><span>Google</span></a></li>
        </ul>
      </div>
                  -->
        <p>Copyright © 2024  All rights reserved.</p>
    </div>
  </div>
</div>

      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
 else{
 header('location:customer/login.php');
  }
  ?>