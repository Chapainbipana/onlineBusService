<?php
   session_start();
   if ((isset($_SESSION['a_name']) && isset($_SESSION['a_password'])) || (isset($_SESSION['c_name']) && $_SESSION['c_password'])) {
    ?>
<?php
include("../../db_conn/connection.php");
             $sourceq="SELECT r_source FROM `root`";
             $results=mysqli_query($connection,$sourceq);

             $destinationq="SELECT r_destination FROM `root`";
             $resultd=mysqli_query($connection,$destinationq);
            
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    <title>Title</title>
</head>
<body>
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
            <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
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
              <li><a class="dropdown-item" href="#">Book Ticket</a></li>
              <li><a class="dropdown-item" href="../root/root.php">Root details</a></li>
              
            </ul>
          </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../login.php">login</a></li>
              <li><a class="dropdown-item" href="../register.php">Register</a></li>
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
                <div class="col lg-12 md-12">
                  <div class="container d-flex justify-content-around ">
                     <div class="row">
                        <form action="contact.php" method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
                            <h1  class="align-center" aria-hidden="true">Ticket Booking</h1>
                           
                            <div class="mb-3">
                              <label for="csource" class="form-label">Source:</label>
                             
                              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="">
                              <?php
                              while ($source_res=mysqli_fetch_assoc($results)){   
     ?>     
                              <option value="<?php echo $source_res['r_source']?>"><?php echo $source_res['r_source']; ?></option>
                              <?php
                              }
                              ?>
                              </select>  
                               </div>
                           <div class="mb-3">
                             <label for="cdestination" class="form-label">Destination:</label>
                             <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="">
                               <?php
                                echo"<option>phalawas</option>";
                                  while ($resultde=mysqli_fetch_assoc($resultd)){   
                                  ?>     
                                    <option><?php echo $resultde['r_destination']; ?></option>
                                    <option>hello</option>
                                    <?php
                                  }

                                 ?>
                              <option>pokhara</option>
                              <option>chitwan</option>
                             </select>
                          </div>
                         <div class="mb-3">
                             <label for="cseat" class="form-label">Seat Number:</label>
                             <input type="number" class="form-control" id="cseat" name="cseat" min="1" max="30"  required>
                       </div>
                       <div class="mb-3">
                            <label for="cdate" class="form-label">Date :</label>
                             <input type="date" class="form-control" id="cdate" name="cdate"  required>
                          </div>
                
                          <button type="submit" class="btn btn-primary" name="customereditsubmit" >Submit</button>
                
                </form>
        

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
             $(document).ready(function() {
              
                var dtToday=new Date();
                var month =dtToday.getMonth()+1;
                var day =dtToday.getDay();
                var year=dtToday.getFullYear();
                if(month<10)
                  month = '0'+month.toString();
                
                if(day<10)
                  day='0'+day.toString();
                
                var maxDate = year+'-'+month+'-'+day;
                $('#cdate').attr('min',maxDate);
             
              
             })
    </script>
  </body>
</html>
<?php
} else {
  header('location:customer/login.php');
}
?>