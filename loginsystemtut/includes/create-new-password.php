<?php
  require "../header.php";
 ?>

       <main>
          <div class="wrapper-main">
            <section class="section-default">

              <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                  echo "Kami tidak bisa memvalidasi permintaan anda!";
                } else {
                  if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ) {
                    ?>

                    <form action="includes/reset-password.inc.php" method="post">
                      <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                      <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                      <input type="password" name="pwd"placeholder="Masukan password Baru..">
                      <input type="password" name="pwd-repeat"placeholder="Ulangi password Baru..">
                      <button type="submit" name="reset-password-submit">Reset Password</button>
                    </form>


                    <?php
                  }
                }
               ?>

            </section>
          </div>
       </main>

 <?php
  require "../footer.php";
  ?>
