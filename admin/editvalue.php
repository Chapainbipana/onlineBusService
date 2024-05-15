<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>

<?php
  if (isset($_POST['editroot'])) {
    include("../db_conn/connection.php");
    $b_num = trim($_POST['b_number']);
    $b_phone= trim($_POST['phone']);
    $source = trim($_POST['source']);
    $destination = trim($_POST['destination']);
    $price = trim($_POST['price']);
    $seat = trim($_POST['avaible_seat']);
    $receiveseat = trim($_POST['rseat']);
    $date = trim($_POST['date']);
    $q="UPDATE `root` SET `b_number`='$b_num',`d_phone`='$b_phone',`r_source`='$source',`r_destinatin`='$destination',`price`='$price',`avaiable_seats`='$seat',`receiveticket`='$receiveseat',`date`='$date'  WHERE `root`.`b_number` = '$b_num'";
    $query=mysqli_query($connection,$q);
    if($query){
        header("location:root.php");
    } 
    else{
        echo"error";
  }
  }
    ?>
    <?php
     }
  else{
    header('location:admin.php');
  }
  ?>