<?php

require_once dirname(__DIR__) . '/init/init.php';
require_once dirname(__DIR__) . '/view/header.php';

$id = $_GET['id'];

if (isset($_GET['id'])) {
    $arti = mengedit_kan($id);
    while ($row = mysqli_fetch_assoc($arti)) {
        $judul = $row['judul'];
        $isi = $row['isi'];
        $time = $row['waktu'];
        $tag = $row['tag'];
        $gambar = $row['gambar']; // Ambil path gambar
    }
}

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $time = $_POST['time'];
    $tag = $_POST['tag'];

    // Proses unggahan gambar
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['gambar']['tmp_name'];
        $fileName = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $fileType = $_FILES['gambar']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = dirname(__DIR__) . '/uploads/';
            $dest_path = $uploadFileDir . $fileName;
            if(move_uploaded_file($fileTmpPath, $dest_path)) {
                $gambar = 'uploads/' . $fileName; // Update path gambar
            } else {
                echo 'There was some error moving the file to upload directory.';
            }
        } else {
            echo 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
        }
    }

    rubah_kan($judul, $isi, $time, $tag, $gambar, $id);
}

?>
<div class="container text-center"><h1>form edit post</h1></div>
<div class="container mt-6">
    <div class="row d-flex justify-content-center mt-6">
        <div class="col-md-8">
            <form action="" method="post" class="form-group" enctype="multipart/form-data">
                <label for="judul">judul</label>
                <input type="text" placeholder="judul" name="judul" class="form-control" value="<?php echo $judul; ?>"><br><br>
                <label for="isi">isi</label>
                <input id="isi" type="hidden" name="isi" value="<?php echo htmlspecialchars($isi); ?>">
                <trix-editor input="isi" class="form-control"></trix-editor><br><br>
                <label for="time">time create post</label>
                <input type="text" placeholder="time" id="time" name="time" class="form-control" value="<?php echo $time; ?>"><br><br>
                <label for="tag">category post</label>
                <input type="text" placeholder="tag" name="tag" id="tag" class="form-control" value="<?php echo $tag; ?>"><br><br>
                <label for="gambar">Upload Gambar</label>
                <input type="file" name="gambar" class="form-control"><br><br>
                <?php if (!empty($gambar)): ?>
                    <img src="../<?php echo $gambar; ?>" alt="Gambar Artikel" style="max-width: 100%;">
                <?php endif; ?>
                <input type="submit" name="submit" value="kirim" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/view/footer.php'; ?>
