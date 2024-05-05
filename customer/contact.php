<?php
   session_start();
   ?>
   <?php
 echo $_SESSION['c_name'];
 if (isset($_SESSION['c_name'])&&$_SESSION['c_password']){
 

?>
<?PHP
include("../db_conn/connection.php");
 $b_num= $_GET['b_number'];
 $q="SELECT * FROM `ticket` where b_number='$b_num' ";
          $result=mysqli_query($connection,$q);
          while ($res=mysqli_fetch_assoc($result)){  
            echo $res['t_price'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Title</title>
    <style>

    </style>
</head>
<body class="cbg-img">
<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Online Bus service</a>
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
            <a class="nav-link" href="customerdisplay.php">Customer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Bus Detials 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="add.php">Book Ticket</a></li>
              <li><a class="dropdown-item" href="busdisplay.php">Root Detials</a></li>
              
            </ul>
          </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="login.php">login</a></li>
              <li><a class="dropdown-item" href="register.php">Register</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-dark"><a href="logout.php">logout</a></button>
        </form>
      </div>
    </div>
  </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col lg-12 md-12">
                <div class="container d-flex justify-content-around ">
            <div class="row">
             <form action="transaction.php" method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
             <h1  class="align-center" aria-hidden="true">Contact Information</h1>
                <div class="mb-3">
                    <input type="hidden" name="b_number" value="<?php echo $res['b_number']; ?>">
            </div>
                <div class="mb-3">
                <label for="c_name" class="form-label">Customer Name:</label>
                <input type="text" class="form-control" id="c_name" name="cname"  required >
                </div>
                <div class="mb-3">
                 <label for="cage" class="form-label">Age:</label>
                 <input type="text" class="form-control" id="cage" name="cage"  pattern="[1-9]{2}"  required>
                </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Phone:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" pattern="\d{10}"  required>
                </div>
                <div class="mb-3">
                             <label for="cseat" class="form-label">Seat Number:</label>
                             <input type="number" class="form-control" id="cseat" name="cseat" min="1" max="30"  required>
                       </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Ticket price:</label>
                 <input type="text" class="form-control" id="price" name="price" value="<?php echo $res['t_price']; ?>" placeholder="<?php echo $res['t_price']; ?>"  readonly  required>
                </div>

               <button type="submit" class="btn btn-primary" name="contact" >Submit</button>
              </div>
         </form>
         </div>
         </div>

                </div>
            </div>
        </div>
    </section>
    <?php
          }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
 else{
 header('location:login.php');
  }
  ?>