<?php


if (isset($_GET['action'])) {

    switch ($_GET['action']) {
       case 'tambah':
          include('./img/add.php');
          break;

       case 'upload':
		
   break;

         case 'hapus':
            $sql = $con->prepare("DELETE FROM t_ann ");
            $sql->execute();
         
            header('location: ?page=ann&ann=del');
         break;
       
       default:
          include('./img/list.php');
          break;
    }
 
 } else {
 
    include('./img/list.php');
 
 }
 ?>
 