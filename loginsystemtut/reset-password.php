<?php
  require "header.php";
 ?>

       <main>
          <div class="wrapper-main">
            <section class="section-default">
                <h1>Reset Password Anda</h1>
                <p>Sistem akan mengirim email kepada alamat email yang anda dan akan memberi petunjuk untuk mereset password anda.</p>
                <form action="includes/reset-request.inc.php" method="post">
                  <input type="text" name="email" placeholder="Masukan Email yang berhubungan dengan akun anda...">
                  <button type="submit" name="reset-request-submit">Pesan telah terkirim ke alamat email anda!</button>
                </form>
                <?php
                if (isset($_GET["reset"])) {
                  if ($_GET["reset"] == "success") {
                    echo '<p> Cek E-mail Anda!</p>';
                  }
                }

                 ?>
            </section>
          </div>
       </main>

 <?php
  require "footer.php";
  ?>
