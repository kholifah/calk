<?php
  session_start();
  if(isset($_SESSION['is_login']) && $_SESSION['is_login'] === true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Users</title>
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/dasboard.css">
</head>
<body>
  <div class="header-bg clear">
    <i class="fa fa-align-left"></i>
    <i class="fa fa-search"></i>
    <h1>Dashboard</h1>
  </div>
  <div class="main-nav">
    <nav>
      <ul>
        <li>Tweets</li>
        <li>Following</li>
        <li>Followers</li>
        <li>Trends</li>
      </ul>
    </nav>
  </div>
  <div class="content">
    <div class="search">
      <input type="text" name="search" placeholder="Search Here">
    </div>
    <div class="tweets">
      <ul>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("sairiart1@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Ahmed Husairi<br/>
              <small><a href="#">@ahmed.husairi</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("sunupf@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Sunu Pinasthika F<br/>
              <small><a href="#">@sunupf</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("blaisck@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Ibnu<br/>
              <small><a href="#">@blaisck</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("tm.kholifah@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              M Kholifah<br/>
              <small><a href="#">@kholifah</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("rifkiahmad.111@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Rifki Ahmad<br/>
              <small><a href="#">@rifkiahmad</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("masterzera111@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Mas Ramadlon<br/>
              <small><a href="#">@zezen</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        <li>
          <div class="post-meta">
            <img class='avatar' src="http://www.gravatar.com/avatar/<?php echo md5("nickiesiva@gmail.com");?>?s=50" alt="">
            <h2 class="name">
              Nicky Valentino<br/>
              <small><a href="#">@nickiesiva</a></small>
            </h2>
          </div>
          <div class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elik.
          </div>
          <div class="date"><?php echo date("d F Y");?></div>
        </li>
        
      </ul>
    </div>
  </div>
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