<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"> <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="style.css">
    <title>Blogku</title>
</head>
<body>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Navbar -->
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $semua = sistem_cari($cari);
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container">
        <a class="navbar-brand" href="/blog/index.php">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="btn" href="/blog/regis.php" style="color:white">Registrasi</a>
                    </li>
                <?php } else { ?>
                    <?php 
                        $putri = $_SESSION['user'];
                        if (cek_status($putri) == 1) { // Jika status adalah admin
                    ?>
                        <li class="nav-item">
                            <a class="btn" href="/blog/dashboard.php" style="color:white">Dashboard</a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <span class="navbar-text me-3">
                <?php if (!isset($_SESSION['user'])) { ?>
                    silakan log in!!
                <?php } else { 
                    if (cek_status($putri) == 1) {
                        echo "admin";
                    } else {
                        echo 'user: ' . $_SESSION['user'];
                    }
                } ?>
            </span>
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="btn" href="/blog/logout.php" style="color:white">Logout</a>
            <?php } else { ?>
                <a class="btn" href="/blog/log.php" style="color:white">Log in</a>
            <?php } ?>
        </div>
    </div>
</nav>
</body>
</html>
