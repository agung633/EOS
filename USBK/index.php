
<?php include 'database.php'; ?>
<?php
/*
 *	Get Total Questions
 */
 $query ="SELECT * FROM questions";
 //Get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>USBK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>

	<header>
    <a class="tombol" href="input.php">+ Tambah Soal Baru</a>
		<div class="container">
			<h1>USBK</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Ujian Sekolah Berbasis Komputer</h2>
			<p>Pilihan Ganda : Pilihlah Jawaban Yang Benar</p>
			<ul>
				<li><strong>Jumlah Pertanyaan: </strong><?php echo $total; ?></li>
				<li><strong>Tipe Soal: </strong>Pilihan Ganda</li>
			</ul>
			<a href="question.php?n=1" class="start">Mulai</a>
		</div>
	<footer>
		<div class="container">
			Copyright &copy; 2017, STIKOM YOS SUDARSO
		</div>
	</footer>
</body>
</html>
