<?php
require_once 'init/init.php';

// Jika user belum login
if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = 'Login dulu bro!!';
    header('Location: log.php');
    exit();
}

$status = $_SESSION['user'];
$semua = menambahkan();
$idi = cek_status($status);

require_once 'view/header.php';
?>

<div class="container mt-5">
    <!-- Pesan selamat datang -->
    <?php if (isset($_SESSION['user'])) { ?>
        <div class="alert alert-success" role="alert">
            Selamat datang, <?php echo $_SESSION['user']; ?>!
        </div>
        <?php if ($idi != 0) { ?>
            <div class="mb-3">
                <a class="btn btn-primary" href="crud/tambah.php">Tambah Artikel</a>
            </div>
        <?php } ?>
    <?php } ?>

    <a href="nindi.php" class="btn btn-secondary mb-3">Nindi</a>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <?php foreach ($semua as $row): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <a href="halaman.php?id=<?php echo $row['id']; ?>" class="stretched-link">
                                    <h5 class="card-title"><?php echo 'JUDUL: ' . $row['judul']; ?></h5>
                                </a>
                                <p class="card-text"><?php echo excerpt($row['isi']); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-info text-dark">Tag: <?php echo $row['tag']; ?></span>
                                    <?php if ($idi != 0) { ?>
                                        <div>
                                            <a href="crud/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><img src="asset/edit.png" alt="Edit" height="21" width="21"></a>
                                            <a href="crud/hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><img src="asset/hapus.png" alt="Hapus" height="21" width="21"></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="p-3 bg-light rounded-3">
                <h4 class="text-center">Sidebar</h4>
                <p>Tambahkan konten tambahan di sini seperti informasi penting, tautan, atau iklan.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php require_once 'view/footer.php'; ?>
