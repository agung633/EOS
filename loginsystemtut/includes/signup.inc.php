<?php
                    // jika tombol yang ada di file signup.php  dan tombol itu bernamakan atau name nya aalah signup-submit maka tombol -
                    // - ini akan menjalan kan kondisi yang ada di dalam tombol kurung kurawal tersebut
  if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';
                       // nah di sini kita baru tau manfaat dari name. variabel yang dinamakan $username akan mengambil data -
                        //  - menggunakan methode POST dan data itu akadidapatkan dari. file "signup.php" dan  data tersebut -
                        //  - ada di suatu tag yang miliki name atau nama "uid", potongan kodenya itu name="uid" nah datanya mengambil dari sini
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


      if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) ) {
          header("location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
          exit();
      }
      else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid");
      }
      else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../signup.php?error=invalidmail&uid=".$username);
          exit();
      }else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
        }
        else if ($password !== $passwordRepeat) {
          header("Location: ../signup.php?error=passwordcheck&uid=".$username. "&mail=".$email);
          exit();
        }
        else {

          $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
          $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                  header("Location: ../signup.php?error=sqlerror");
                  exit();
                }
                else {
                  mysqli_stmt_bind_param($stmt, "s", $username);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_store_result($stmt);
                  $resultCheck = mysqli_stmt_num_rows($stmt);
                    if ($resultCheck > 0 ) {
                      // header("Location: ../signup.php?error=usertaken&mail=".$email);
                      echo '<script type="text/javascript">alert("User sudah ada yang memakainya silahkan gunakan username lain");window.history.go(-1);</script>';
                      exit();
                    }
                    else {
                      $sql = "INSERT INTO users (uidUsers, emailUsers, pwUsers) VALUES (?, ?, ?)";
                      $stmt = mysqli_stmt_init($conn);
                      if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                      }
                      else {
                        // ini untuk  eskripsi menggubnakan metode hash, "password_hash" ini termasuk metode enkrip data, nah jika ingin mendekrip nya kita harus menggunakan metode decrip di php sendiri yaitu menggunakan "password_verify"  ini untuk dekrip di loginnya -
                        //  - kenapa di loginnya ya karena kita menggunakan metode enkripnya di bagian registernya/ maka dekripnya setidaknya berada di login
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);

                        header("Location: ../signup.php?signup=success");
                        exit();
                      }


                    }

                }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);


      }

      else {
        header("Location: ../signup.php");
        exit();
      }
