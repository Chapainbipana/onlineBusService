<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>
<?php
  if (isset($_POST['editbus'])) {
    include("connection.php");
    $b_num = trim($_POST['b_num']);
    $b_phone= trim($_POST['bphone']);
    $b_source = trim($_POST['b_source']);
    $b_destination = trim($_POST['b_destination']);
    $b_time = trim($_POST['b_time']);
    $q="UPDATE `bus_info` SET `phone` = '$b_phone', `source` = '$b_source', `destination` = '$b_destination', `b_time` = '$b_time' WHERE `bus_info`.`b_number` = '$b_num'";
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