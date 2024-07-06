<?php

require_once(__DIR__ . '/../init/init.php');
// Fungsi mencari artikel berdasarkan judul
function sistem_cari($cari) {
    global $link;
    $query = "SELECT * FROM blog WHERE judul LIKE ?";
    $stmt = mysqli_prepare($link, $query);
    $cari_param = "%$cari%";
    mysqli_stmt_bind_param($stmt, "s", $cari_param);
    mysqli_stmt_execute($stmt);
    $hasil = mysqli_stmt_get_result($stmt);
    return $hasil;
}

// Fungsi mengupdate data di database
function rubah_kan($judul, $isi, $time, $tag, $gambar, $id) {
    global $link;
    $query = "UPDATE blog SET judul=?, isi=?, waktu=?, tag=?, gambar=? WHERE id=?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "sssssi", $judul, $isi, $time, $tag, $gambar, $id);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Data gagal diubah";
    }
}

// Fungsi menampilkan semua artikel
function menambahkan() {
    global $link;
    $query = "SELECT * FROM blog";
    $hasil = mysqli_query($link, $query);
    return $hasil;
}

// Fungsi menambahkan artikel baru ke database
function menambah_kan($judul, $isi, $time, $tag, $gambarPath) {
    global $link;
    $query = "INSERT INTO blog (judul, isi, waktu, tag, gambar) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $judul, $isi, $time, $tag, $gambarPath);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Data gagal ditambahkan";
    }
}


// Fungsi mengedit artikel berdasarkan id
function mengedit_kan($id) {
    global $link;
    $query = "SELECT judul, isi, waktu, tag, gambar FROM blog WHERE id=?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}
// Fungsi untuk membatasi kata pada artikel
function excerpt($text, $length = 100) {
    // Hapus semua tag HTML
    $text = strip_tags($text);

    // Potong teks jika lebih panjang dari panjang yang ditentukan
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length) . '...';
    }

    return $text;
}



// Fungsi menghapus artikel berdasarkan id
function hapus_data($id) {
    global $link;
    $query = "DELETE FROM blog WHERE id = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }
}
?>
