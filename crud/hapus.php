<?php

require_once dirname(__DIR__).'/init/init.php';

if(isset($_GET['id'])){
    if (hapus_data($_GET['id'])){
      header('Location:../dashboard.php');

    }else {
        echo 'data gagal dihapus';
    }
}


?>
