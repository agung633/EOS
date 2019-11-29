<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type= "text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type= "text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type= "text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	<link rel="stylesheet" href="css/styles1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".icon-1").click(function(){
			  $(".input").toggleClass("active");
			  $(".container1").toggleClass("active");
			})
		});
	</script>
    <style>
        body{
            background-image: url("assets/img/bg.jpg");
            background-size: cover;
        }
    </style>

    <title>Osis SMA Ibrahimy</title>
  </head>
  <body>

     <!--Top Navbar-->

     <section>
            <?php include_once "assets/header.php"; ?>
       </section>

       <!--Login Form-->
       <section class="login">
       <form action="proses.php" method="POST">
           <div class="login-form">
               <h4>Harap</h4>
               <h7>Silahkan Login Terlebih Dahulu</h7>
                <div class="textbox">
                    <input type="text" placeholder="Nis" name="nis" id="username">
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="password" id="password" >
                </div>
                <div class="login-btn">
                    <input class="btn2" type="submit" name="login" value="LOGIN">
                </div>
           </div>
      </form>
  
       </section>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/item.js"></script>
  </body>

</html>
