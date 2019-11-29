<?php 
session_start();
?>
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
		$(function(){
			$(".icon-1").click(function(){
			  $(".input").toggleClass("active");
			  $(".container1").toggleClass("active");
			})
		});
	</script>

    <title>Osis SMA Ibrahimy</title>
  </head>
  <body>

      <!--Top Navbar-->

    <section>
         <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
          
            <img src="assets/img/home.png" width="4%">
            <a id="hi" class="navbar-brand" href="#">OSIS SMA Ibrahimy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="#">Tes Online</a>
              </li>
                <li class="nav-item dropdown">
                  <a id="ho" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Category
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a id="he" class="dropdown-item" href="#">Men</a>
                  <a id="he" class="dropdown-item" href="#">Women</a>
                  <div class="dropdown-divider"></div>
                  <a id="he" class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="agenda.html" >Agenda</a> <!--disini saya menggunakan #section1 agar langsung menuju ke div id section1-->
              </li>
              </ul>
            </div>
              <div class="container1">
                        
                          
                  <div class="search-box">
                    <input type="text" class="input">
                  </div>
                  <div class="icon-items icon-1">
                      <i class="fas fa-search"></i>
                  </div>
                  
                </div>
            <li id="aman" class="nav-item dropdown">
              <img class="profile dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" src="img/profile.png" width="15%">
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="he" class="dropdown-item" href="login.php">Login</a>
              </div>
            </li>
            </div>
            </div>
          </div>
        </div>
      </nav>
    </section>

    

    <!--Image Slider-->
    
    <section>
            <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="assets/img/profil.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/profil1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/profil2.png" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </div>
    </section>

    <!--judul osis-->
    <section>
        <div class="container">
            <h3 class="jarak">Anggota Osis</h3>
        </div>
    </section>

    <!--Anggota Osis-->
    <section>
    <center>
      <div  class="container">
        <div class="jarak">
              <div class="owl-carousel owl-theme" style="transition: all 800ms ease 0s;">
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                  </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider5.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider8.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider2.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider13.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider14.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
                <div class="efek">
                  <div class="how"><div class="item"><a href="#"><img  src="assets/img/slider15.jpg"></a></div></div>
                    <div class="middle">
                      <div class="texthover">
                         Lihat Profil
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </center>
      </section>

      <!--tombol view more-->
      <section>
        <div class="container">
            <input class="btn-more" type="button" value="View More">
          </div>
      </section>

      <!--About Us-->
      <section class="aboutu">
          <div class="container ">
              <div class="row">
                <div class="col-5">
                  <b style="color:black;">More Link</b>
                  <div id="sizeaboutu">
                    <p id="jarak2"><div id="section1"><a class="text-link" href="#">PRIVACY POLICY</a></div><br id="jarak2"><a class="text-link " href="#">TERMS AND CONDITIONS</a></p>
                  </div>
                </div>
              <div class="col-7">
                  <b style="color:black;">Contact Us</b>
                <div id="sizeaboutu">
                  <p id="jarak2">Perum Galaxy Patrang Blok G2 no 16 Jl Srikoyo Patrang, Jember - Indonesia</p>
                  <p><img src="assets/img/phone.png" width="2%">(+62) 81216382297</p>
                  <div id="jarak3"><img src="assets/img/mail.png" width="3%">contact@bishop.com</div>
                  <p id="wa"><img src="assets/img/wa.png"  width="3%">081216382297  <img src="assets/img/line.png"  width="3%">@BiShop</p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
      </section>


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/item.js"></script>
  </body>
</html>