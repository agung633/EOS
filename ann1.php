<?php 
$hj = mysqli_query($con,"SELECT * FROM t_ann");
$row = mysqli_fetch_array($hj);
$cek = mysqli_num_rows($hj);
if ($cek == 0){
    echo '
    <div class="box box-danger" style="width: 40rem;">
    <h3 style="color:grey;">Tidak Ada Pengumuman</h3>
    </div>';
}else{
?>
<div class="box box-danger" style="width: 40rem;">
<h3>Pengumuman</h3>
  <div class="card-body">
    
    <p class="card-text"><?php echo $row['isi']; ?></p>
  </div>
</div>
<?php } ?>
