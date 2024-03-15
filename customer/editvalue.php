<?php
session_start();
?>
<?php
if (isset($_POST['rsubmit'])) {
    include("../db_conn/connection.php");
    $cid=trim($_POST['id']);
    $cname = trim($_POST['cname']);
    $cpassword = trim($_POST['cpassword']);
    $caddress = trim($_POST['caddress']);
    $cage = trim($_POST['cage']);
    $cphone = trim($_POST['cphone']);
   $q=" UPDATE `customer_login` SET `c_name`='$cname',`c_password`='$cpassword',`address`='$caddress',`age`='$cage',`phone`='$cphone' WHERE `customer_login`.`id` ='$cid'";
   $query=mysqli_query($connection,$q);
   if($query){
    header("location:customerdisplay.php");
} 
else{
    echo"error";
}

}