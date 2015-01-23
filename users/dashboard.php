<?php
  session_start();
  if(isset($_SESSION['is_login']) && $_SESSION['is_login'] === true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Users</title>
</head>
<body>
    Dashboard, Hello <?php $_SESSION['username']?>
    <nav id='dashboard-nav'>
      <ul>
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </nav>
</body>
</html>
<?php
  }else{
?>
  <h1>403</h1>
  <p>Forbidden Access!!</p>
<?php
  }
?>