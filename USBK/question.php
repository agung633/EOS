<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	/*
	*	Get total questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;

	/*
	*	Get Question
	*/
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();

	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" >
	  <link rel="stylesheet" href="custom.css" >
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
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
			<div class="current">Soal ke <?php echo $question['question_number']; ?> dari <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="kirim" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</main>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
	<footer>
		<div class="container">
			Copyright &copy; 2017, STIKOM YOS SUDARSO
		</div>
	</footer>
</body>
</html>
