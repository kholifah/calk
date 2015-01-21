<?php
  require "lib/database/database.php";
  require "lib/validation/validation.php";
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  $validation = new Validation();

  if($validation->validate_is_not_null($username) &&
     $validation->validate_password_is_not_null($password)
  ){
    $db = new Database("
          pgsql:dbname=calk;
          host=localhost;
          user=vagrant;
          password=vagrant
        ");
    
    if($db->isConnected()){
      //lakukan sesuatu
      $sql = "SELECT * FROM calker WHERE username=:username";
      
      echo $sql;
      
    }else{
       header("location:login.php?log=Login gagal");
    }
      
      
    
    
//    header("location:users/dashboard.php");
  }else{
    header("location:login.php?log=Username dan password tidak boleh kosong");
  }
  
?>