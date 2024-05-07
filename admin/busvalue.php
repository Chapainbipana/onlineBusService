<?php
  session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
?>
<?php
  if (isset($_POST['addsubmit'])) {
    include("../db_conn/connection.php");
    $b_num = trim($_POST['b_num']);
    $b_phone= trim($_POST['phone']);
    $d_name = trim($_POST['d_name']);
    
    
    $seat = trim($_POST['seat']);

    $q="INSERT INTO `bus_info`(`b_number`, `phone`, `driver_name`, `avaiable_seat`) VALUES ('$b_num','$b_phone','$d_name','$seat')";
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