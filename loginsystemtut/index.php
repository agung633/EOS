<?php
  require "header.php";
 ?>

      <main>
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p>Anda telah Login!</p>';
          }
          else {
            echo '<p>Anda Telah Logout!</p>';
          }
         ?>


      </main>


<?php
require "footer.php";
 ?>
