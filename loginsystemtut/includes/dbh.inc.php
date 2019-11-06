<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "systemlogin";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname );

if (!$conn) {
  die("Koneksi gagal SAD! errornya itu di : ".mysqli_connect_error());
}
