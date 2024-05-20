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
    <title>Title</title>
</head>
<body class="bg-img">
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
<?php 
     include '../db_conn/connection.php';
            $q="SELECT * FROM `bus_info`";
           $result=mysqli_query($connection,$q);
            
            
            ?>
    <section>
  <div class="container d-flex justify-content-around">
    <div class="row">
    <div class="col-5"></div>
    
    <form action="rootvalue.php " method="post"  class="p-5  m-5 shadow">
            <h1>Add Root</h1>
          <div class="mb-3">
               <label for="b_num" class="form-label">Bus Number:</label>
               <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="b_number">
                              <?php
                              while ($source_res=mysqli_fetch_assoc($results)){   
     ?>     
                              <option value="<?php echo $source_res['b_number']?>"><?php echo $source_res['b_number']; ?></option>
                              <?php
                              }
                              ?>
                              </select> 
                
          </div>
          <div class="mb-3">
                <label for="phone" class="form-label"> phone :</label>
                <input type="text" class="form-control"  name="phone" required>
         </div>
          
          <div class="mb-3">
                <label for="source" class="form-label">source:</label>
                <input type="text" class="form-control"  name="source"  required>
         </div>
         <div class="mb-3">
                <label for="destination" class="form-label">destination</label>
                <input type="text" class="form-control"  name="destination"  required>
         </div>
         <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control"  name="price"  required>
         </div>
         <div class="mb-3">
                <label for="seat" class="form-label">Available seat</label>
                <input type="number" class="form-control"  name="avaible_seat"  required>
         </div>
         <div class="mb-3">
                <label for="seat" class="form-label">Rececive Ticket</label>
                <input type="number" class="form-control"  name="receiveseat"  required>
         </div>
         <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date"  required>
         </div>
         <div class="mb-3">
                   <button type="submit" class="btn btn-primary" name="addroot" >Submit</button>
          </div>  
        </form>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>