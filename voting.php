<?php 
session_start();
if (empty($_SESSION['nis'])) {
  echo"<script type='text/javascript'>alert('Harap Login') 
  ;window.history.back();</script>";

}
else{
define('BASEPATH', dirname(__FILE__));

include('./include/connection.php');

$sqlnama="SELECT fullname FROM t_user WHERE id_user='".$_SESSION['nis']."'";
$sqljbt="SELECT id_jbtn FROM t_user WHERE id_user='".$_SESSION['nis']."'";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/animate.css"/>
    <link rel="stylesheet" type= "text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type= "text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type= "text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type= "text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="agenda/light.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(function(){
			$(".icon-1").click(function(){
			  $(".input").toggleClass("active");
			  $(".container1").toggleClass("active");
			})
		});
    </script>
      <style media="screen">
         body {
          background-image: url("assets/img/bg.jpg");
            background-size: cover;
            font-size:1.5em;
         }
         .img {
            height: 200px;
            width: 196px;
         }

         .button.success {
           background-color: #059f3e;
           color: #ebebeb;
         }

         .button.success:hover, .button.success:focus {
            background-color: #22bb5b;
            color: #fefefe;
         }
         .nama {
           position:absolute;
           background: rgba(35, 35, 35, 0.624);
           width: 196px;
           top: 178px;
           font-size:16px;
           padding:3px 0px;
         }
         .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}


.row {
    margin-right: -15px;
    margin-left: -15px;
}
      </style>
</head>
<section>
         <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
          
            <img src="assets/img/home.png" width="4%">
            <a style="font-size:1.5em;padding-left:25px;padding-right:-25px;" class="navbar-brand" href="#">OSIS SMA Ibrahimy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <li class="nav-item">
                <a id="ho" class="nav-link" href="index.html">Home</a>
             </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="#">Tes Online</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="voting.php">Vote</a>
              </li>
              <li class="nav-item">
                <a id="ho" class="nav-link" href="#">Profil</a>
              </li>
              <li class="nav-item">
                  <a id="ho" class="nav-link" href="agenda.html" >Agenda</a> <!--disini saya menggunakan #section1 agar langsung menuju ke div id section1-->
              </li>
              <div class="search-box">
                  <input type="text" class="input">
              </div>
              <div class="icon-items icon-1">
                  <i class="fas fa-search"></i>
              </div>
              </ul>
            </div>
              </ul>
            </div>
   
            <li id="aman" class="nav-item dropdown">
              <img class="profile dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" src="assets/img/profile.png" width="15%">
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="he" class="dropdown-item" href="index.php">LogOut</a>

                <!--Modal-->
                
                <center><button type="button" id="he" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                Profil
                </button></center>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" style="border-radius:80%" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php 
                      $result1 = mysqli_query($con, $sqlnama);
                      $row = mysqli_fetch_array($result1);
                      echo $row['fullname'];
                    ?> <small>XII IPA-2</small></h3>
                    <span><strong>Jabatan: </strong></span>
                        <?php
                        $result = mysqli_query($con,$sqljbt);
                        $row = mysqli_fetch_array($result);
                        if($row['id_jbtn'] == "3") {
                          echo "<span class='badge badge-danger'>Ketua Osis</span>";
                        }
                        else {
                          echo "<span class='badge badge-success'>Wakil Ketua</span>";
                        }
                        ?>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div> 
            </li>
            </div>
            </div>
          </div>
        </div>
      </nav>
    </section>
    </br>
    </br>

    <!--Navbar-->

    
  <div class="container">
        <?php




         $thn     = date('Y');
         $dpn     = date('Y') + 1;
         $periode = $thn.'/'.$dpn;

         $get="SELECT * FROM t_pemilih WHERE nis='".$_SESSION['nis']."'";
         $a = mysqli_query($con, $get);
         $row = mysqli_fetch_array($a);
         
         if (!$a) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }

         $sql = $con->prepare("SELECT * FROM t_kandidat WHERE periode = ?") or die($con->error);
         $sql->bind_param('s', $periode);
         $sql->execute();
         $sql->store_result();

         if ($_SESSION['nis']==$row['nis']){

          echo "<h1 style='color:white;'>maaf anda sudah memvoting<h1>";


         }
         else{
           if ($sql->num_rows() > 0) {
                    $numb = $sql->num_rows();
                    echo '<div class="text-center" style="padding-top:20px;">
                            <h2 style="color:white;">Daftar Calon Ketua Osis Periode '.$periode.'</h2>
                        </div> 
                        <hr />';

                

                  echo '<div class="col-md-12 col-md-offset-1">';
                  echo '<div class="row">';

                    for ($i = 1; $i <= $numb; $i++) {
                        $sql->bind_result($id, $nama, $foto, $visi, $misi, $suara, $periode);
                        $sql->fetch();
              ?>
                        <div class="col-md-6">
                        <center>
                          <section class="wow fadeInDown" data-wow-delay="<?php echo $i; ?>s">
                            <div class="thumbnail col-md-6">  
                              <div class="text-center">   
                                <img src="./assets/img/kandidat/<?php echo $foto; ?>" class="img">
                                <p class="nama"><?php echo $row['nis']; ?></p>
                                <div class="caption">
                                    <a href="./detail.php?id=<?php echo $id; ?>" class="btn btn-warning btn-block">Lihat Visi Misi</a>
                                    <a href="./submit.php?id=<?php echo $id; ?>&s=<?php echo $suara; ?>" class="btn btn-success btn-block">Beri Suara</a>
                                </div>
                                </div>
                              </div>
                          </section>
                          </center>
                        </div>
                              
                      <?php
                            }

                          echo '</div>';

         } 
              else {

                    echo '<div class="callout warning">
                            <h2 style="color:white;">Belum Ada Calon Ketua</h2>
                          </div>';
                  }
        }
         echo '</div>';

         ?>
      </div>
      <script src="js/popper.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/item.js"></script>
      <script src="js/function.js"></script>
      <script type="text/javascript" src="./assets/js/jquery.js"></script>
      <script type="text/javascript" src="./assets/js/wow.js"></script>
      <script type="text/javascript">
         wow = new WOW(
            {
               animateClass: 'animated',
               offset:100,
               callback:function(box) {
                  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
               }
            }
         );
         wow.init();
      </script>

<!--Voting-->

    <div class="row">
      <div class="col-md-12">
          <?php
            if (isset($_GET['page'])) {
              switch ($_GET['page']) {
              case 'thanks':
                include('./thanks.php');
              break;
                              

              }
              exit;
              }
              ?>

        </div>

  </body>
</html>

            <?php }
            ?>