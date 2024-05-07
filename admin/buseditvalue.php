<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>
<?php
  if (isset($_POST['editbus'])) {
    include("../db_conn/connection.php");
    $b_num = trim($_POST['b_num']);
    $b_phone= trim($_POST['bphone']);
    $drivename = trim($_POST['drivename']);
    $seat = trim($_POST['seat']);
    $q="UPDATE `bus_info` SET `phone` = '$b_phone', `driver_name` = '$drivename', `avaiable_seat` = '$seat' WHERE `bus_info`.`b_number` = '$b_num'";
    $query=mysqli_query($connection,$q);
    if($query){
        header("location:busdisplay.php");
    } 
    else{
        echo"error";
  }
}
?>
<?php
  }
  else{
    header("location:admin.php");
  }
?>