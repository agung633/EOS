<?php
session_start();


define('BASEPATH', dirname(__FILE__));

require('./include/connection.php');

$thn     = date('Y');
$dpn     = date('Y') + 1;
$periode = $thn.'/'.$dpn;
$suara   = $_GET['s'] + 1;

//update suara
$update  = $con->prepare("UPDATE t_kandidat SET suara = ? WHERE id_kandidat = ?") or die($con->error);
$update->bind_param('is', $suara, $_GET['id']);
$update->execute();

//simpan data pemilih
$save = $con->prepare("INSERT INTO t_pemilih(nis, periode) VALUES(?,?)") or die($con->error);
$save->bind_param('ss', $_SESSION['nis'], $periode);
$save->execute();


header('location:./voting.php?page=thanks');
?>

       
