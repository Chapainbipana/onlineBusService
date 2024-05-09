<?php
          
          include("../db_conn/connection.php");
          $id= $_GET['id'];
          $q="SELECT * FROM `customer_login` where id='$id' ";
          $result=mysqli_query($connection,$q);
          while ($res=mysqli_fetch_assoc($result)){  
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
              <li><a class="dropdown-item" href="add.php">Add Bus</a></li>
              <li><a class="dropdown-item" href="busdisplay.php">display Bus Detials</a></li>
              
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
         <div class="container d-flex justify-content-around ">
            <div class="row">
             <form action=" "  method="post"  class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
             <h1  class="align-center" aria-hidden="true"> Edit customer</h1>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
            </div>
                <div class="mb-3">
                <label for="c_name" class="form-label">Customer Name:</label>
                <input type="text" class="form-control" id="c_name" name="cname" value="<?php echo $res['c_name']; ?>" required >

                </div>
                <div class="mb-3">
                 <label for="cpassword" class="form-label">Password:</label>
                 <input type="password" class="form-control" id="cpassword" name="cpassword" value="<?php echo $res['c_password'];?>" required>
                </div>
                <div class="mb-3">
                 <label for="caddress" class="form-label">address:</label>
                 <input type="text" class="form-control" id="caddress" name="caddress" value="<?php echo $res['address']; ?>" required>
                </div>
                <div class="mb-3">
                 <label for="cage" class="form-label">Age:</label>
                 <input type="text" class="form-control" id="cage" name="cage"  pattern="[1-9]{2}" value="<?php echo $res['age']; ?>" required>
                </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Phone:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" pattern="\d{10}" value="<?php echo $res['phone']; ?>" required>
                </div>
          
               <button type="submit" class="btn btn-primary" name="customereditsubmit" >Submit</button>
              </div>
         </form>
         </div>
         </div>
     </section>
     <script>
        function itsfunction(){
            var password=document.getElementById("cpassword").value;
            var age=document.getElementById("cage").value;
            var regp=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*?\~]).{5,16}/
            var rega=/^\d{1,2}/
            if(password.match(regp)){
                return true;
            }
            else{
                alert("invalid password");
                return false;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 
   	   } ?>
   	   