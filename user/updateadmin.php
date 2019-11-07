<?php
if (!isset($_POST['update'])) {

   header('location: ../');

} else {
   define('BASEPATH', dirname(__FILE__));

   include('../../include/connection.php');

   $id = $_POST['id_admin'];
   $username = $_POST['username'];
   $fullname  = $_POST['fullname'];
   $jabatan  = $_POST['jabatan'];
   $password  = $_POST['password'];
   $hashedpw = password_hash($password, PASSWORD_DEFAULT);

   if($password == '' || $fullname == '' || $jabatan == '' || $password == '') {

      echo '<script type="text/javascript">alert("Semua form harus terisi");window.history.go(-1)</script>';

   } else if(!preg_match("/^[a-zA-z \'.]*$/",$fullname)) {

      echo '<script type="text/javascript">alert("Nama hanya boleh mengandung huruf, titik(.), petik tunggal");window.history.go(-1)</script>';

   } else {

      $sql = $con->prepare("UPDATE t_admin SET  username = ?, fullname = ?, id_jbtn = ?,password = ? WHERE id_admin = ?");
      $sql->bind_param('sssss', $username, $fullname, $jabatan, $hashedpw, $id);
      $sql->execute();

      header('location:../dashboard.php?page=user');

   }

}

?>
