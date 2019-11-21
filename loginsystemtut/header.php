<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<header>
  <nav>
    <a href="#">
      <img src="" alt="">
    </a>
    <ul>
      <li><a href="#">Hoooooome</a></li>
      <li><a href="#">Profil</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div>
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username atau Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php">Signup</a>
      <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">LogOut</button>
      </form>
    </div>
  </nav>
</header>
