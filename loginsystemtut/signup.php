<?php
  require "header.php";
 ?>

       <main>
          <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>

                <?php
                if (isset($_GET["error"])) {
                  if ($_GET["error"] == "emptyfields") {
                    echo '<p>Isi semua kolom untuk registernya</p>';
                  }
                  else if ($_GET["error"] == "invaliduid") {
                    echo '<p>Invalid username!</p>';
                  }
                  elseif ($_GET["error"] == "invalidmail") {
                    echo '<p>Invalid Email!</p>';
                  }
                  elseif ($_GET["error"] == "passwordcheck") {
                    echo '<p>Silahkan ulang password dengan benar!</p>';
                  }
                  elseif ($_GET["signup"] == "success") {
                    echo '<p>Selamat anda sudah terdaftar!</p>';
                  }
                }
                 ?>
                <form class="" action="includes/signup.inc.php" method="post">

                    <!-- "teype" itu untuk tipe datayang akan di masukan atau di tampilkan kedalam textbox tersebut adalah tulisan atau angka bisa di sebut -
                          - varchar sih dan yang terpenting tidak di sensor jika value teype nya adalah "text"-->
                      <input type="text" name="uid" placeholder="Username">
                      <!-- property name itu berfungsi nanti pas kita mau mengambil data yang ada di texbox tertentu , dan mengambil datanya itu kita menggunakan PHP -
                          - maka "name" itu berperan penting untuk sebagai patokan untuk menghubungkan data yang ada di nama kolom di database. dan di phpnya -
                          - menggunakan method "$_POST" karena di tag form "method"nya menggunakan "post"-->
                      <input type="text" name="mail" placeholder="E-mail">
                      <!-- type="password" ini sama seperti text tetapi kita akan di beri tampilan sensor untuk setiap karakter yang kita masukan kedalam textbox -
                          - yang type kan "password"-->
                      <input type="password" name="pwd" placeholder="Password">
                      <input type="password" name="pwd-repeat" placeholder="RepeatPassword">
                      <button type="submit" name="signup-submit">Signup</button>
                </form>

                <!-- Di sini awal di buatnya recovery account atau bisa di sebut dengan forgot password? -->
                <?php
                if (isset($_GET["newpwd"])) {
                  if ($_GET["newpwd"] == "passwordterupdate") {
                    echo '<p> Password anda telah di perbarui!</p>';
                  }
                }
                 ?>
                <a href="reset-password.php">Lupa Password?</a>

            </section>
          </div>
       </main>

 <?php
  require "footer.php";
  ?>
