<?php
session_start();
?>
<?php
if (isset($_POST['rsubmit'])) {
    include("../db_conn/connection.php");
    $cname = trim($_POST['cname']);
    $cpassword = trim($_POST['cpassword']);
    $caddress = trim($_POST['caddress']);
    $cage = trim($_POST['cage']);
    $cphone = trim($_POST['cphone']);
    $regp = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*?\~]).{5,16}/";
    $rega = "/[1-9]{1,2}/";
    $regph = "/\d{10}/";
    if (preg_match($regp, $cpassword) && preg_match($regph, $cphone)) {
        $q = "INSERT INTO `customer_login`( `c_name`, `c_password`, `address`, `age`, `phone`) VALUES ('$cname','$cpassword','$caddress','$cage','$cphone')";
        $_SESSION['cname']=$cname;
        $_SESSION['cpassword']=$cpassword;
        $query=mysqli_query($connection,$q);
          if($query){
            header("location:index.php");
            }
            else{
             header("location:register.php");
            }
    }else{
        header("location:register.php");
    }
    
}
else{
    header("location:register.php");
}

?>