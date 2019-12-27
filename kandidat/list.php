<?php
if (!isset($_SESSION['id_admin'])) {
   header('location: ../');
   
}


?>

<div class="row">
   <div class="col-md-9">
      <h3>Daftar Kandidat</h3>
   </div>
   <div class="col-md-3" style="padding-top:10px;">
   <?php 
   $cresult =mysqli_query($con,"SELECT * FROM t_user");
   if (!$cresult) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
   $row =mysqli_fetch_array($cresult);

   if ($row['pemilih'] == "N"){ ?>
    <a class="btn btn-danger" href="?page=kandidat&action=aktif"onclick="return confirm('Yakin ingin aktifkan voting??');">Aktifkan Voting</a>
   <?php
   }
   else { ?>
   <a class="btn btn-danger" href="?page=kandidat&action=nonaktif" onclick="return confirm('Yakin ingin menonaktifkan voting??');">Nonaktifkan Voting</a>
   <?php
   }
   ?>
      <a class="btn btn-primary" href="?page=kandidat&action=tambah">Tambah Kandidat</a>
   </div>
</div>
<hr />
<div class="row">
    <div class="col-md-3">
        <select id="periode" class="form-control">
            <option value="">-- Pilih Periode--</option>
            <?php
            for ($i=16; $i < 30; $i++) {
               $k = $i + 1;
               echo '<option value="20'.$i.'/20'.$k.'">Periode 20'.$i.' / 20'.$k.'</option>';
            }
            ?>
        </select>
    </div>
    <div style="clear:both"></div>
    <br />
    <div class="col-md-12">
        <div id="data">
        </div>
    </div>
</div>

