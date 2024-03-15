<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>
<?php
  if (isset($_POST['addsubmit'])) {
    include("../db_conn/connection.php");
    $b_num = trim($_POST['b_num']);
    $b_phone= trim($_POST['b_phone']);
    $b_source = trim($_POST['b_source']);
    $b_destination = trim($_POST['b_destination']);
    $b_time = trim($_POST['b_time']);

    $q="INSERT INTO `bus_info`(`b_number`, `phone`, `source`, `destination`, `b_time`) VALUES ('$b_num','$b_phone','$b_source','$b_destination','$b_time')";
     $query=mysqli_query($connection,$q);
     if($query){
        header("location:busdisplay.php");
     }
     else {
		echo "<br>error".$query."<br>".mysqli_error($connection);
	   }
}
?>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>