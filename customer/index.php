<?php
 session_start();
 if ((isset($_SESSION['a_name'])&&isset($_SESSION['a_password']))||(isset($_SESSION['c_name'])&&$_SESSION['c_password'])) {
 
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
            <a class="nav-link" href="customeredit.php"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Book ticket 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Booking/book.php">Book Ticket</a></li>
              <li><a class="dropdown-item" href="busdisplay.php">Root details</a></li>
              
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
        <div class="col-lg-6 col-12">
          <img src="asset/img/bus.png" class="img-fluid" alt="..." style="">
        </div>
        <div class="col-lg-6 col-12">
          <h1>About</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A laboriosam ab doloremque
          neque, reiciendis omnis recusandae repellat, ex sapiente nobis quis nisi delectus incidunt et repudiandae
          maxime quaerat est tempora distinctio vitae! At aliquam consequuntur corrupti ea, neque harum beatae eligendi
          fuga itaque magnam, cumque ullam ab dignissimos assumenda, sed voluptatem? Harum odio, expedita sapiente
          laborum esse quisquam aperiam praesentium! Quae harum facilis voluptatem unde et nulla officiis. Eligendi
          error reiciendis quo quibusdam doloribus culpa officiis quod exercitationem a, velit soluta eum deleniti ad
          recusandae eaque nostrum harum molestias pariatur excepturi, et debitis ipsam laboriosam. Consectetur
          assumenda dolores at ea!</p>
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
     }
  else{
    header('location:login.php');
  }
  ?>