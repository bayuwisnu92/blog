<?php
$link = mysqli_connect ('localhost',"root","","blogku") or die(connection_error);


$query= "UPDATE blog SET judul='hasni' 
WHERE id=2";
if(mysqli_query($link,$query)){
    echo "data base berhasil di update";
}else{
    echo "data base gagal di update";
}

?>