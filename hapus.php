<?php
require_once 'init.php';
if(isset($_GET['id'])){
    if (hapus_data($_GET['id'])){
        header('Location: index.php');
    }else {
        echo 'data gagal dihapus';
    }
}


?>
