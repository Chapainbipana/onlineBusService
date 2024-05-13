<?php
   session_start();
   if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {
   
 ?>

<?php
  include("../db_conn/connection.php");
  $b_num= $_GET['b_number'];
  $q = "DELETE FROM `ticket` WHERE b_number='$b_num'";
  $query=mysqli_query($connection,$q);
  if ($query) {
    header('location:root.php'); 
  }
  else{
  	echo "error".$query."<br>".mysqli_error($connection);
  }
  mysqli_close($connection);
?>
<?php
}
else{
     header('location:admin.php');
  }
  ?>