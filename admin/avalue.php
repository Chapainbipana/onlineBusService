<?php
   session_start();
?>
<?php
  if(isset($_POST['asubmit'])){
    include("../db_conn/connection.php");
    $aname = trim($_POST['uname']);
  	$password = trim( $_POST['password']);
    $q = " SELECT * FROM `admin` WHERE a_password='$password'"; 
     // echo $q;
      $query= mysqli_query($connection,$q);

      if(mysqli_num_rows($query)){
        $_SESSION['a_name']=$aname;
        $_SESSION['a_password']=$password;
        header("location:index.php");
       
      }
      else{
        echo"<script>alert('please enter the valid user and password')</script>";
        header("location:admin.php");
      }
      /*
      while( $res=mysqli_fetch_array($query))
      {
          if($res['a_name']==$aname && $res['a_password']==$password )
          {
            header("location:\bipana/onlineBusService/index.php");
          }
      }
      */
    }else{
       header("location:admin.php");
    }
   
  
?>