<?php
require_once 'init/init.php';
require_once 'view/header.php';

// Menangkap id
$id = $_GET['id'];
if (isset($id)) {
    $arti = mengedit_kan($id);
    while ($row = mysqli_fetch_assoc($arti)) :
        $judul = $row['judul'];
        $isi = $row['isi'];
        $time = $row['waktu'];
        $tag = $row['tag'];
        $gambar = $row['gambar']; // Ambil path gambar
    endwhile;
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php if (!empty($gambar)): ?>
                <div class="text-center mb-4">
                    <img src="<?php echo $gambar; ?>" alt="Gambar Artikel" style="max-width: 100%; height: auto;">
                </div>
            <?php endif; ?>
            <h1 class="text-center mb-4"><?php echo $judul; ?></h1>
            <div class="content">
                <?php echo $isi; ?>
            </div>
            <div class="mt-4">
                <p><strong>Waktu:</strong> <?php echo $time; ?></p>
                <p><strong>Tag:</strong> <?php echo $tag; ?></p>
                <div class="text-center">
                    <a href="crud/edit.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'view/footer.php'; ?>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
