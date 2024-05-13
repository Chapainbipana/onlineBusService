<?php
  session_start();
  unset($_SESSION['b_number']);
  unset($_SESSION['c_name']);
  unset($_SESSION['c_password']);
  header("location:login.php");
?>