<?php

if (isset($_POST["reset-request-submit"])) {
  $userEmail = $_POST["email"];
  $id = mysqli_query($con, "SELECT email FROM t_admin WHERE email='$userEmail'");
  $ada = mysqli_num_rows($id);

  if($userEmail == null){
    header("location:./reset-password.php?reset=error");
  }
  elseif($ada == 0){
    header("location:./reset-password.php?reset=ada");
  }
  else{
  $selector = bin2hex(openssl_random_pseudo_bytes(8));
  $token = openssl_random_pseudo_bytes(32);

  $url = "localhost/eos/admin/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

  $expires = date("U") + 1800;
  
  define('BASEPATH', dirname(__FILE__));
  include '../include/connection.php';

 

  


  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Telah terjadi Error!";
    exit();
  }else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpire) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Telah terjadi Error!";
    exit();
  }else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }
 // ini untuk menutup koneksi database dan statementnya agar aman dari para hacker yang akan masuk melalui jaringan database yang masih terbuka
  mysqli_stmt_close($stmt);
  mysqli_close($con);

  $to = $userEmail;

  $subject = 'Reset Password anda Untuk Akun Anda Sendiri!';

  $message = '<p>Kami mengirim permintaan reset password anda ke pusat. Link password anda akan di kirim kan kepada email anda, jika anda tidak merasa melakukan reset password, anda bisa mengabaikan email ini</p>';
  $message .= '<p> Ini adalah link untuk mereset password anda:</br>';
  $message .= '<a href="' . $url . '">' . $url .'</a></p>';

  $headers = "From : SMA IBRAHIMY <smaibrahimy@gmail.com>\r\n";
  $headers .= "Reply to :smaibrahimy@gmail.com\r\n";
  $headers .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $headers);

  header("Location: ./reset-password.php?reset=success");
}

} else {
  header("Location: ../index.php");
}

