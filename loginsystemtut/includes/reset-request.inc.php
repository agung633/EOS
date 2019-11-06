<?php

if (isset($_POST["reset-request-submit"])) {

  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $url = "localhost/loginsystemtut/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

  $expires = date("U") + 1800;

  require 'dbh.inc.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Telah terjadi Error!";
    exit();
  }else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpire) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
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
  mysqli_close($conn);

  $to = $userEmail;

  $subject = 'Reset Password anda Untuk Akun Anda Sendiri!';

  $message = '<p>Kami mengirim permintaan reset password anda ke pusat. Link password anda akan di kirim kan kepada email anda, jika anda tidak merasa melakukan reset password, anda bisa mengabaikan email ini</p>';
  $messege .= '<p> Ini adalah link untuk mereset password anda:</br>';
  $message .= '<a href="' . $url . '">' . $url .'</a></p>';

  $headers = "From : SMA IBRAHIMY <smaibrahimy@gmail.com>\r\n";
  $headers .= "Reply to :smaibrahimy@gmail.com\r\n";
  $headers .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $headers);

  header("Location: ../reset-password.php?reset=success");

} else {
  header("Location: ../index.php");
}
