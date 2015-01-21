<?php
  require "lib/validation/validation.php";

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $validation = new Validation();
  if($validation->validate_username($username) &&
     $validation->validate_email($email) AND
     $validation->validate_password($password)
    ){
    echo "Semua Data Valid";
  }else{
    header("location:login.php?reg=Ada Data yang Gak Valid Bro#register");
  }

  
?>