<?php 
session_start();
if(empty($_SESSION['tes'])){
  header("location:homepage.php");
}else{
define('BASEPATH', dirname(__FILE__));

include('./include/connection.php');


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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/jquery.js"></script>
</head>
<style>
    body{
        background-color: #4CAF50;
    }
</style>
<body>
<?php
$halaman = 2;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$result = mysqli_query($con,"SELECT * FROM t_soal");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);           
$query = mysqli_query($con,"select * from t_soal  ");
$urut=$mulai+1;
?>
<div class="container" style="margin-top:30px;">
<h3 style="color:white;"><img src="assets/img/home.png" width="7%">&nbsp;| Tes Online</h3>
<div class="jumbotron"  style="padding-top:0.5rem;padding-bottom:3rem">
<div id="demo" class="col-md-3 text-center" style="background-color:#4CAF50;color:white;padding:10px 0;"></div>
<form name="form1" id="form1" method="post" action="quiz1.php">
<?php
$i = 0;
        while($row =mysqli_fetch_array($query))
        {
            
            $id=$row["Idujian"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"];

            
           
            ?>
            
            
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $total; ?>>
            <div class="col-md3">
            <br>
                <h3  width="17"><font color="#000000"></font>
                <h5 class="text-center" width="430"><font color="#000000"><?php echo $urut++;  echo "&nbsp;. ".$pertanyaan.""; ?></font></h5>
            </div>
            <?php
                // if (!empty($row["gambar"])) {
                //     echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                // }
            ?>
                  </br>
                
                  <center>
             A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="<?php echo $pilihan_a; ?>"  onchange="ajaxsubmit()">
              <?php echo "$pilihan_a";?>
            
            
            <font color="#000000">&nbsp;</font>
            <font color="#000000">
             B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="<?php echo $pilihan_b; ?>"onchange="ajaxsubmit()">
              <?php echo "$pilihan_b";?></font> 
           
            <font color="#000000">&nbsp;</font>
            <font color="#000000">
            C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="<?php echo $pilihan_c; ?>"onchange="ajaxsubmit()">
              <?php echo "$pilihan_c";?></font> 
         
            <font color="#000000">&nbsp;</font>
            <font color="#000000">
            D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="<?php echo $pilihan_d; ?>"onchange="ajaxsubmit()">
              <?php echo "$pilihan_d";?></font> </center>
                
                <?php
              $i++;
              } ?>
              
              <!-- <div class=""> -->
              <?php 
              

  ?>

  
  <!-- <noscript><input type="submit" style="float:right;margin-right:20px" name="abu" class="btn btn-success"></noscript> -->
  <input type="submit" style="float:right;margin-right:20px" name="abu" class="btn btn-success" value="Jawab">
</div>
</form>
</div>

<script>
  
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $_SESSION['waktu']; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  if(hours == 0){
    document.getElementById("demo").innerHTML = minutes + " Menit " + seconds + "Detik ";
  }else if(minutes == 0){
    document.getElementById("demo").innerHTML =hours + "Jam "
  + minutes + " Menit " + seconds + "Detik ";
  } else if (hours == 0 && minutes == 0){
  document.getElementById("demo").innerHTML =seconds + "Detik ";
}else{
  document.getElementById("demo").innerHTML =hours + "Jam "
  + minutes + " Menit " + seconds + "Detik ";
}
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('form1').submit();
  }
}, 1000);
</script>
</body>
</html>
<?php } ?>