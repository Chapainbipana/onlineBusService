<?php
   session_start();
?>
<?php
 echo $_SESSION['c_name'];
 if (isset($_SESSION['c_name'])&&$_SESSION['c_password']){
 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <?php
    include("../../db_conn/connection.php");
    if(isset($_POST['contact'])){
        $b_number=$_POST['b_number'];
        $c_name=$_POST['cname'];
        $cage=$_POST['cage'];
        $phone=$_POST['cphone'];
        $seat=$_POST['cseat'];
        $price=$_POST['price'];
        $date=date("Y-m-d");
        
    }
    echo"$date";
    echo $_SESSION['c_name'];
    
    ?>

       <div class="section">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
       </div>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
 else{
 header('location:login.php');
  }
  ?>