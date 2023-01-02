<?php

//fungsi mengupdate data ke data base
function rubah_kan($judul,$isi,$time,$tag,$id){
    global $link;
    $query = "UPDATE blog SET judul='$judul', isi='$isi', waktu='$time', tag='$tag'
    WHERE id=$id";
    if(mysqli_query($link,$query)){
        header('Location: index.php');

    }else {
        echo 'ada yang salah';
    }
}

function menambahkan(){
global $link;
$query = "SELECT * FROM blog";
$hasil= mysqli_query($link,$query);
return $hasil;
// fungsi menambahkan
}
 function menambah_kan($judul,$isi,$time,$tag){
    global $link;
    $query ="INSERT INTO blog VALUES ('','$judul','$isi','$time','$tag')";
    if(mysqli_query($link,$query)){
        header('Location: home.php');
    }else{
        echo "data gagal ditambahkan ";
    }
}
//fungsi mengedit berdasarkan id
function mengedit_kan($id){
    global $link;
    $query = "SELECT * FROM blog WHERE id ='$id' ";
$hasil= mysqli_query($link,$query);
return $hasil;
}
//cara membatasi kata
function excerpt($string){
    $string=substr($string,0,100);
    return $string . '....';
}
//fungsi menghapus
function hapus_data($id){
    global $link;
    $query = "DELETE FROM blog WHERE id =$id ";
if(mysqli_query($link,$query)){
    return true;
}else{
    return false;
}

}
//fungsi dari register

?>
