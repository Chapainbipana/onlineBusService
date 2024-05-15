<?php
   session_start();
 if (isset($_SESSION['c_name'])&&$_SESSION['c_password']){
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Online Bus Service System</title>
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
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
                
                <li><a class="dropdown-item" href="../rootdisplay.php">Book ticket</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown">
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

    <?php
    include("../db_conn/connection.php");
    $customer=$_SESSION['c_name'];
    if(isset($_POST['contact'])){
        $id ="";
        $b_number=$_POST['b_number'];
        $c_name=$_POST['cname'];
        $cage=$_POST['cage'];
        $phone=$_POST['cphone'];
        $seat=$_POST['cseat'];
        $price=$_POST['price'];
        $date=date("Y-m-d");
        $q="SELECT * FROM `customer_login` WHERE 'c_name' = '$customer' ";
        $result=mysqli_query($connection,$q);
        
        //echo "error".$result."<br>".mysqli_error($connection);
         // while ($man = mysqli_fetch_assoc($result)) { 
           //   $id = $man['id'];
             // echo"$id";
             // echo"hello";
        //  }
          echo"$id";
          ///echo "error".$result."<br>".mysqli_error($connection);
        $insertquery="INSERT INTO `transactions`(`b_number`, `date`,`c_name`, `price`) VALUES ('$b_number','$date','$c_name','$price')";
        $query=mysqli_query($connection, $insertquery);
       // echo"$insertquery";
       if($query){
          $query="SELECT * FROM `root` WHERE b_number= '$b_number' ";
          $available=mysqli_query($connection, $query);
          $row = mysqli_fetch_assoc($available);
          $available_tickets = $row['avaiable_seats'];
          $received_tickets = $row['receiveticket'];
          $available_tickets--; // Decrease available tickets by 1
          $received_tickets++; // Increase received tickets by 1
        //  echo$available_tickets;
         // echo$received_tickets;
          $updatequery= "UPDATE `root` SET `avaiable_seats`='$available_tickets',`receiveticket`='$received_tickets' WHERE `b_number`='$b_number' ";
              $thanQuery=mysqli_query($connection, $updatequery);
        
      ?>
      <div class="section">
        <div class="container">
        <div class="title">
              <h1>Ticket</h1>
             </div>
            <div class="row">
            <div class="col md-6 ">
            <table class="table">
                <thead>
                    <tr>
                        <th>particulars</th>
                        
                        <th>value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"> Name:</td>
                        <td><?php echo$c_name ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Age:</td>
                        <td><?php echo$cage ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Seat Number:</td>
                        <td><?php echo$seat ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Bus Number:</td>
                        <td><?php echo$b_number; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Ticket price:</td>
                        <td><?php echo$price;?></td>
                    </tr>
                    <tr>
                        <td scope="row">Date:</td>
                        <td><?php echo$date;?></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
       </div>
       
      <?Php
        }
       // else {
          // header("location:addroot.php");
         // echo "error".$query."<br>".mysqli_error($connection);
      // }
    ?>
<!--
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
     
<?php
 include_once("../include/footer.php");
?>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
 }
     }
 else{
 header('location:login.php');
  }
  ?>