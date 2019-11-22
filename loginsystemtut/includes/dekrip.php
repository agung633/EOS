<?php
include "dbh.inc.php";

if ($pwdCheck = password_verify($pwdCheck, $row['pwUsers'])) {
    echo $row;
}

?>