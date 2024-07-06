<?php
require_once 'init/init.php';

// Jika user belum login
// if (!isset($_SESSION['user'])) {
//     $_SESSION['msg'] = 'Login dulu bro!!';
//     header('Location: log.php');
//     exit();
// }

// $status = $_SESSION['user'];
$semua = menambahkan();
// $idi = cek_status($status);

require_once 'view/header.php';
?>
<h1 class="text-center">Selamat Datang di Blog</h1>
<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        <div class="col-10">
            <form role="search" method="get" action="" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>

    


            <div class="row">
                <?php foreach ($semua as $row): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100" style="padding:15px">
                        <?php if (!empty($row['gambar'])): ?>
                                <img src="<?php echo $row['gambar']; ?>" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit:cover;">
                            <?php endif; ?>
                            <div class="card-body">
                                <a href="halaman.php?id=<?php echo $row['id']; ?>" class="text-decoration-none">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row['judul'], ENT_QUOTES, 'UTF-8'); ?></h5>
                                </a>
                                <p class="card-text"><?php echo htmlspecialchars(excerpt($row['isi']), ENT_QUOTES, 'UTF-8'); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-info text-dark">Tag: <?php echo htmlspecialchars($row['tag'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
       
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php require_once 'view/footer.php'; ?>
