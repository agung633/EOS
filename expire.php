<?php
session_start();
unset($_SESSION['tes']);
header("location:quiz.php"); 
?>