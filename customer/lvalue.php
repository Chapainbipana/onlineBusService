<?php
  session_start();
?>
<?php
    if(isset($_POST['lsubmit'])){
        include("connection.php");
        $uname = trim($_POST['uname']);
        $password = trim( $_POST['password']);
        $q="SELECT `c_name`, `c_password` FROM `customer_login` WHERE c_password='$password' ";
        $query=mysqli_query($connection,$q);

        if(mysqli_num_rows($query)){
            $_SESSION['c_name']=$uname;
            $_SESSION['c_password']=$password;
            //echo $res['c_name'];
            header("location:../index.php");
           //echo$_SESSION['c_name'].",".$_SESSION['c_password'];

        }
    else{
        echo"<script>alert('please enter the valid user and password')</script>";
         header("location:login.php");
    }
    }
    else{
        header("location:login.php");
    }
       
?>