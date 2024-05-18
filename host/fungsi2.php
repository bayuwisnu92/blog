<?php
//fungsi registrasi
function register_user($data){
global $link;
    $nam= escape($data['nama']);
    $pass= escape($data['password']);
    //$pass = password_hash($pass,PASSWORD_DEFAULT);
    if(!empty(trim($nam)) && !empty(trim($pass))){
        $masuk="INSERT INTO user VALUES ('','$nam','$pass','')";
        if(mysqli_query($link,$masuk)){
            return true;
        }else {
            return false;
        }
    }else{

}
}
//fungsi cek data
function register_cek($data){
    global $link;
    $nam = escape($data['nama']);
    $query= "SELECT * FROM user WHERE username ='$nam'";
    if($hasil = mysqli_query($link,$query)){
       return mysqli_num_rows($hasil);
    }
}



function escape($data){
    global $link;
    return mysqli_real_escape_string($link,$data);
}

function cek_status($status){
    global $link;
 $nam = escape($status);
 $query = "SELECT status FROM user WHERE username = '$status'";
 $hasil = mysqli_query($link,$query);
 $status = mysqli_fetch_assoc($hasil)['status'];
 return $status;
}


?>
