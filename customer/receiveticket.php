
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
    <style>
      section{
        padding-top: 100px;
      }
      .seating-chart {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .seat {
            width: 30px;
            height: 30px;
            background-color: #4CAF50;
            color: white;
            display: flex;*/
            align-items: center;
            /*justify-content: center;*/
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .seat:hover {
            background-color: #45a049;
        }
        .seat.occupied {
            background-color: #d9534f;
            cursor: not-allowed;
        }
    </style>
</head>
<body class="cbg-img">
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

    <section>  <div class="row">
                
                <div class="col-5 lg-5 md-5">
                
             <form action="pay.php"  method="post" class="p-5   " >
             <h1  class="align-center" aria-hidden="true">Ticket Receive</h1>
             <?php
                   include("../db_conn/connection.php");
                   $available_tickets ="";
                   $received_tickets ="";
                   $b_number= $_GET['b_number'];
                   $_SESSION['b_number']=$_GET['b_number'];
                   
                    $q="SELECT * FROM `root` where b_number='$b_number' ";
                    $result=mysqli_query($connection,$q);
                           
                     while ($res=mysqli_fetch_assoc($result)){  

                     // $available_tickets = $res['avaiable_seats'];
                     //echo $available_tickets;
                     // $received_tickets =$res['receiveticket'];
               ?>
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
                             <input type="number" class="form-control" id="cseat"  min="1" max="30"  required>
                            
                    <div class="seating-chart">
                    <?php
                    $totalSeats =  $res['totalseats']; // Example: 20 seats
                    for ($i = 1; $i <= $totalSeats; $i++) {
                        echo "<div class='seat' name='cseat' data-seat-number='$i'>$i</div>";
                    }
                    ?>
    </div>
                          </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Ticket price:</label>
                 <input type="text" class="form-control" id="price" name="price" value="<?php echo $res['price']; ?>" placeholder="<?php echo $res['t_price']; ?>"  readonly  required>
                </div>

               <button type="submit" class="btn btn-primary" name="contact" >Payment</button>
             
         </form>
         </div>
             <div class="col-4 lg-4 md-4 bg-light">
                 <!-- <img src="../asset/img/photo.avif" class="img-fluid" alt="...">-->
                 <div>
                  <h3 class="text-center">Travel details</h3>
                     </div>
                  <div>
                  <table>
                   <tr>
                    <td>
                    Route:
                    </td>
                    <td><?php echo $res['r_source']?> - <?php echo $res['r_destinatin']?></td>
                   </tr>
                   <tr>
                    <td>
                    Date:
                    </td>
                    <td><?php echo $res['date']; ?></td>
                   </tr>
                   <tr>
                    <td>
                    price:
                    </td>
                    <td>Rs<?php echo $res['price']; ?></td>
                   </tr>
                   <tr>
                    <td>
                    Bus Number:
                    </td>
                    <td><?php echo $res['b_number']; ?></td>
                   </tr>
                   <tr>
                    <td>
                    Drive Number:
                    </td>
                    <td><?php echo $res['d_phone']; ?></td>
                   </tr>
                  </table>
                  </div>
                 
                 </div>
                 
                </div>
         </div>
    </section>
    <?php
             //  $available_tickets--; // Decrease available tickets by 1
              // $received_tickets++; // Increase received tickets by 1
             //  $updatequery= "UPDATE `root` SET `avaiable_seats`='$available_tickets',`receiveticket`='$received_tickets' WHERE `b_number`='$b_number' ";
             //  $thanQuery=mysqli_query($connection, $updatequery);
          }

         
          include_once("../include/footer.php")
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.seat').forEach(seat => {
            seat.addEventListener('click', function() {
                if (!seat.classList.contains('occupied')) {
                    const seatNumber = seat.getAttribute('data-seat-number');
                    
                    seat.classList.add('occupied');
                    alert(`Seat number ${seatNumber} is received`);
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  </body>
</html>
<?php
}
 else{
 header('location:login.php');
  }
  ?>
