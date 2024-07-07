<?php
require_once 'init/init.php';
require_once 'view/header.php';

// Jika user belum login
if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = 'Login dulu bro!!';
    header('Location: log.php');
    exit();
}
$semua = menambahkan();
$status = $_SESSION['user'];
?>
<div class="container">
    

</div>

<div class="container mt-5">
<div class="row mb-3">
            <div class="col-12">
                <a class="badge btn btn-dark" href="crud/tambah.php"><i class="bi bi-plus-lg"></i> Tambah Artikel</a>
            </div>
        </div>
    <div class="row">
        <div class="col-md-8">

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($semua as $index => $row) : ?>
                            <tr>
                                <th scope="row"><?php echo $index + 1; ?></th>
                                <td><?php echo htmlspecialchars($row['judul']); ?></td>
                                <td><?php echo htmlspecialchars($row['tag']); ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                    <?php if (cek_status($putri) == 1) : ?>
                                        <a href="crud/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
                                        <a href="crud/hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

                            </body>