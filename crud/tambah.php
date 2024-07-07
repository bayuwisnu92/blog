<?php

require_once dirname(__DIR__) . '/init/init.php';
require_once dirname(__DIR__) . '/view/header.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $time = $_POST['time'];
    $tag = $_POST['tag'];
    $gambarPath = '';

    // Tangani upload gambar
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $gambar = $_FILES['gambar'];
        $ext = pathinfo($gambar['name'], PATHINFO_EXTENSION);
        $gambarPath = 'uploads/' . uniqid() . '.' . $ext;
        move_uploaded_file($gambar['tmp_name'], dirname(__DIR__) . '/' . $gambarPath);
    }

    // Simpan path gambar dan data lainnya ke database
    menambah_kan($judul, $isi, $time, $tag, $gambarPath);
}


?>

<div class="container mt-6">
    <h1 class="text-center mb-5">Tambah Postingan</h1>
    <div class="row d-flex justify-content-center mt-6">
        <div class="col-md-8">
            <form action="/blog/index.php" method="post" class="form-group" enctype="multipart/form-data">
             <input type="file" name="gambar" class="form-control"><br>
                <input type="text" placeholder="Judul" name="judul" class="form-control"><br><br>
                <input id="isi" type="hidden" name="isi">
                <trix-editor input="isi" class="form-control"></trix-editor><br><br>
                <input type="text" placeholder="Time" name="time" class="form-control"><br>
                <input type="text" placeholder="Tag" name="tag" class="form-control"><br>
                
                <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>


<?php require_once dirname(__DIR__) . '/view/footer.php'; ?>
