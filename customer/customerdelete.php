<?php
   session_start();
   if ((isset($_SESSION['a_name'])&&isset($_SESSION['a_password']))||(isset($_SESSION['c_name'])&&$_SESSION['c_password'])) {
   
 ?>

<?php
  include("../db_conn/connection.php");
  $c_id= $_GET['id'];
  $q = "DELETE FROM `customer_login` WHERE id='$c_id'";
  $query=mysqli_query($connection,$q);
  if ($query) {
    header('location:customerdisplay.php'); 
  }
  else{
  	echo "error".$query."<br>".mysqli_error($connection);
  }
?>
<?php
}
else{
     header('location:customerdisplay.php');
  }
  ?>