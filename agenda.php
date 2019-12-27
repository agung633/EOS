<?php
session_start();
if(empty($_SESSION['nis'])){
      header("location:./index.php?page=error");
}else{

      define('BASEPATH', dirname(__FILE__));

      include('./include/connection.php');
      $cresult = mysqli_query($con,"SELECT * FROM t_user WHERE id_user='".$_SESSION['nis']."'");
      $row = mysqli_fetch_array($cresult);
      $result = mysqli_query($con,"SELECT * FROM t_jabatan WHERE id_jbtn='".$row['id_jbtn']."'");
      $row1 = mysqli_fetch_array($result);
      $result1 = mysqli_query($con,"SELECT * FROM t_kelas WHERE id_kelas='".$row['id_kelas']."'");
      $row2 = mysqli_fetch_array($result1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>SMA Ibrahimy</title>
      <link rel="stylesheet" href="css/stylee.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/croppie.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="js/jquery.js"></script>

      <style>
      .containe {
  position: relative;
  width: 50%;
  margin-left:50px;
}

.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
  margin-left:80px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  margin-left:60px;
      top: 50%;
      left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.containe:hover .image {
  opacity: 0.3;
}

.containe:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.text a{
      text-decoration:none;
      color:white;
}
      </style>
</head>
<body>
 
      <div class="wrapper">
            <header class="col-md-12 col-sm-12 col-12" style="background: url(assets/img/hero1.jpg) no-repeat 50% 50%;">
                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                        <a href="homepage.php"><img src="assets/img/home.png" width="13%" style="margin-top:-8px"></a>
                              |&nbsp;SMA IBRAHIMY
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a style="text-decoration:none;" href="daftar.php">Tes Online</a></li>
                                    <li><a style="text-decoration:none;" href="voting.php">Voting</a></li>
                                    <li><a style="text-decoration:none;" href="#">Agenda</a></li>
                                    <li><a style="text-decoration:none;" href="logout.php">Logout</a></li>
                              </ul>
                        </div>
                  </nav>
                  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="container">
                        <div style="background-color:white;margin-top:10px;margin-top:220px;padding:50px 0;" class="jumbotron jumbotron-fluid section">
                        <h2 class="text-center" style="margin-top:-30px">Agenda</h2>
                            <table class="table col-md-10 offset-md-1 table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
            </header>
            </div>
            <div >
            <div id="uploaded_image"></div>
     	</div>
    </div>

    <div id="uploadimageModal" class="modal" role="dialog">
	   <div class="modal-dialog">
	      <div class="modal-content">
	         <div class="modal-header">
	            <h4 class="modal-title" id="myModalLabel">Crop &amp; Upload Gambar</h4>
	            <button type="button" class="close" data-dismiss="modal" >
	                <span aria-hidden="true">&times;</span>
	                <span class="sr-only">Close</span>
	            </button>
	         </div>
	         <div class="modal-body">
	            <div class="row">
	               <div class="col-md-12 text-center">
	                  <div id="image_demo"></div>
	               </div>
	            </div>
	         </div>
	         <div class="modal-footer">
              <button class="btn btn-success crop_image" >Crop &amp; Upload</button>
	         </div>
	      </div>
	   </div>
	</div>



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script> 


// Menu-toggle button

$(document).ready(function() {
      $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
            $('.section').fadeToggle();
      });
});

// Scrolling Effect

$(window).on("scroll", function() {
      if($(window).scrollTop()) {
            $('nav').addClass('black');
            $('.section').fadeOut();
      }

      else {
            $('nav').removeClass('black');
            $('.section').fadeIn();
      }
})


</script>
<?php
include "footer.php";

}
?>