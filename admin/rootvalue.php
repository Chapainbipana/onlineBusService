<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>

<?php
  if (isset($_POST['addroot'])) {
    include("../db_conn/connection.php");
    $b_num = trim($_POST['b_number']);
    $b_phone= trim($_POST['phone']);
    $source = trim($_POST['source']);
    $destination = trim($_POST['destination']);
    $price = trim($_POST['price']);
    $seat = trim($_POST['avaible_seat']);
    $date = trim($_POST['date']);
    $q="INSERT INTO `root`(`b_number`, `d_phone`, `r_source`, `r_destinatin`, `price`, `avaiable_seats`, `date`) VALUES ('$b_num','$b_phone','$source','$destination','$price','$seat','$date')";
    //echo"$q";
    $query=mysqli_query($connection,$q);
    if($query){
        header("location:root.php");
    } 
    else {
       // header("location:addroot.php");
       echo "error".$query."<br>".mysqli_error($connection);
    }
  }
?>

<?php
     }
  else{
    header('location:admin.php');
  }
  ?>