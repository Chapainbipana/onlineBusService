<?php
  session_start();
  unset($_SESSION['a_name']);
  unset($_SESSION['a_password']);
  header("location:admin.php");

?>