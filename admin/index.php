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
  <title>Online Bus Service</title>
</head>

<body>

<?php
include_once("../include/adminheader.php");
?>
  <section>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <img src="asset/img/bus.png" class="img-fluid" alt="..." style="">
        </div>
        <div class="col-lg-6 col-12">
          <h1>About</h1>
          <p>Buses are the most affordable means of transport with a large number of terminals across the country and convenient timetables to help you plan your trip. Buses is a convenient option both for those who travel on a shoestring budget and those who do not want to compromise on comfort. Dhaulagiri Yatayat offers bus service with an online reservation available. Before booking your ticket, read other travellers’ reviews to choose the best option.</p>
        </div>
      </div>
    </div>
    
    
  </section>
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