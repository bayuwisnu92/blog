<?php
// Fungsi registrasi user
require_once(__DIR__ . '/../init/init.php');
function register_user($data) {
    global $link;
    $nam = escape($data['nama']);
    $pass = escape($data['password']);
    
    if (!empty(trim($nam)) && !empty(trim($pass))) {
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, password) VALUES ('$nam', '$hashed_pass')";
        
        if (mysqli_query($link, $query)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Fungsi untuk memeriksa apakah username sudah terdaftar
function register_cek($data) {
    global $link;
    $nam = escape($data['nama']);
    $query = "SELECT * FROM user WHERE username = '$nam'";
    $hasil = mysqli_query($link, $query);
    
    if (mysqli_num_rows($hasil) > 0) {
        return mysqli_fetch_assoc($hasil);
    }
    
    return false;
}
// Fungsi untuk melakukan escape pada data
function escape($data) {
    global $link;
    return mysqli_real_escape_string($link, $data);
}

// Fungsi untuk mengecek status user (contoh: admin atau user biasa)
function cek_status($status) {
    global $link;
    $nam = escape($status);
    $query = "SELECT status FROM user WHERE username = '$status'";
    $hasil = mysqli_query($link, $query);
    $status = mysqli_fetch_assoc($hasil)['status'];
    return $status;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'tahun',
        'm' => 'bulan',
        'w' => 'minggu',
        'd' => 'hari',
        'h' => 'jam',
        'i' => 'menit',
        's' => 'detik',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' yang lalu' : 'baru saja';
}
?>
