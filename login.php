<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to CechCalk</title>
  <link rel="stylesheet" href="/assets/css/roboto/webfonts/roboto_regular_macroman/stylesheet.css">
  <link rel="stylesheet" href="/bower">
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class='login-form'>
    <ul>
      <li><a href="#login">Login</a></li>
      <li><a href="#register">Register</a></li>
    </ul>
    <!-- Start Login Form Here   -->
    <div id="login">
      <form action="userAuth.php" method="post">
        <label>
          <input type="text" name='username' placeholder="Username">
        </label>
        <label>
          <input type="password" name='password' placeholder="Password">
        </label>
        <label>
          <input type="checkbox"> Remeber Me
        </label>
        <input type="submit" value="Login">
      </form>
    </div>
    
    <!-- Start Register Form Here   -->
    <div id="register">
      <form action="userRegistration.php" method="post">
        <label>
          <input type="text" name='username' placeholder="Username">
        </label>
        <label>
          <input type="email" name='email' placeholder="Email">
        </label>
        <label>
          <input type="password" name='password' placeholder="Password">
        </label>
        <label>
          <input type="checkbox"> Show Password
        </label>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
</html>