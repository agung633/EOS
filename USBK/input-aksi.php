<?php
include 'database.php';
$question_number = $_POST['question'];
$teks = $_POST['teks'];



mysqli_query($host,"INSERT INTO questions VALUES('$question','$teks',)");

header("location:index.php?pesan=input");
?>
