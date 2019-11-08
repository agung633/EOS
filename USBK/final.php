<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>USBK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>USBK</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>SELESAI!</h2>
				<p>Selamat, anda sudah menyelesaikan USBK</p>
				<p>Nilai: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Ujian Lagi</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, STIKOM YOS SUDARSO
		</div>
	</footer>
</body>
</html>
<?php session_destroy(); ?>