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
    endwhile;
}
?>

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="bg-dark text-warning p-3 rounded">
                <h4 class="text-center">Artikel Lainnya</h4>
                <?php $semua = menambahkan(); ?>
                <?php foreach ($semua as $row): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="?id=<?php echo $row['id']; ?>" class="text-decoration-none">
                                <h5 class="card-title text-primary"><?php echo $row['judul']; ?></h5>
                                <p class="card-text text-dark"><?php echo excerpt($row['isi']); ?></p>
                            </a>
                            <?php if (cek_status($_SESSION['user']) != 0): ?>
                                <div class="d-flex justify-content-end">
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm me-2"><img src="asset/edit.png" alt="Edit" height="21" width="21"></a>
                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><img src="asset/hapus.png" alt="Hapus" height="21" width="21"></a>
                                </div>
                            <?php endif; ?>
                            <p class="mt-2 mb-0"><strong>Tag:</strong> <?php echo $row['tag']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="card p-4">
                <h1 class="card-title"><?php echo $judul; ?></h1>
                <textarea class="form-control mt-3" name="isi" id="isi" cols="30" rows="10" readonly><?php echo $isi; ?></textarea>
                <div class="mt-4">
                    <p><strong>Waktu:</strong> <?php echo $time; ?></p>
                    <p><strong>Tag:</strong> <?php echo $tag; ?></p>
                    <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'view/footer.php'; ?>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
