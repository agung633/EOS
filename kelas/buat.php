
<?php
$end = date('Y', strtotime('-1 years'));
$now = date('Y');
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SMA IBRAHIMY',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PENGURUS OSIS TAHUN '.$end.'/'.$now.'',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(85,6,'NAMA SISWA',1,0);
$pdf->Cell(27,6,'JABATAN',1,0);
$pdf->Cell(30,6,'JENIS KELAMIN',1,1);

$pdf->SetFont('Arial','',10);

define('BASEPATH', dirname(__FILE__));

include('../../include/connection.php');
$mahasiswa = mysqli_query($con, "select * from t_user where id_kelas='K03' AND `id_jbtn`='2' OR id_jbtn='3'");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['id_user'],1,0);
    $pdf->Cell(85,6,$row['fullname'],1,0);
    if($row['id_jbtn'] == "2"){
        $pdf->Cell(27,6,'Anggota Osis',1,0);
    }elseif($row['id_jbtn'] == "3"){
        $pdf->Cell(27,6,'Ketua Osis',1,0);
    }
    $pdf->Cell(30,6,$row['jk'],1,1); 
}

$pdf->Output();
//header('location:../dashboard.php?page=kelas');
?>
