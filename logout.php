<?php
  session_start();
  session_unset($_SESSION['username']);
  session_unset($_SESSION['is_login']);
  header("location:login.php");
?>