<?php
  session_start();

  require "lib/database/database.php";
  require "lib/validation/validation.php";
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  $validation = new Validation();

  if($validation->validate_is_not_null($username) &&
     $validation->validate_password_is_not_null($password)
  ){
    $db = new Database("pgsql:dbname=calk;host=localhost;user=vagrant;password=vagrant");
    
    if($db->isConnected()){
      //lakukan sesuatu      
      $qry = $db->get('calker',array(
        'username'=>$username
      ));
      
      $data = $qry->fetch(PDO::FETCH_ASSOC);
      
      if($data['password'] === md5($password) && $qry->rowCount() === 1){
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;
        header("location:users/dashboard.php");
      }else{
        header("location:login.php?log=hmm, your username and paswsword doesn't match");
      }
      
    }else{
       header("location:login.php?log=Login gagal");
    }
      
      
    
    
//    header("location:users/dashboard.php");
  }else{
    header("location:login.php?log=Username dan password tidak boleh kosong");
  }
  
?>