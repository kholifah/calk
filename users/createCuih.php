<?php
  session_start();

//  require "lib/database/database.php";
//  require "lib/validation/validation.php";

  $cuih = $_POST['cuih'];
  $username = $_SESSION['username'];

  $db  =  new PDO("pgsql:dbname=calk;host=localhost;user=vagrant;password=vagrant");

  $sql = "INSERT INTO cuih VALUES(DEFAULT,?,DEFAULT,?)";

  $query = $db->prepare($sql);
  $status = $query->execute(array(
    $cuih,
    $username
  ));
  if($status){
    $sql = "SELECT * FROM profile WHERE username = ?";
    
    echo json_encode(array(
      'status' => true,
      'message' => "Cuih Saved Successfully",
      'data' => array(
        'calker' => $username,
        'cuih' => $cuih,
        'date' => $date
      )
    ));
  }else{
    echo json_encode(array(
      'status' => false,
      'message' => "Failed to insert"
    ));
  }
?>