<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Ini adalah Contoh Deskripsi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav>
          <a href="nav-header-main">
            <a class="header-logo" href="index.php"></a>
            <img src="" alt="">
          </a>
          <ul>
            <li><a href="index.php">mrmrk</li>
            <li><a href="#">Portofolio</li>
            <li><a href="#">About me</li>
            <li><a href="#">Contact</li>
          </ul>
          <div class="header-login">
              <?php
              if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                  </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php" class="header-signup">Signup</a>';
              }
               ?>
          </div>
      </nav>
    <header>

</html>
