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
    <title>Blogku</title>
</head>
<body class="bg-secondary">
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
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="regis.php">Registrasi</a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.php">Action</a></li>
                        <li><a class="dropdown-item" href="about.php">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about.php">Didieu anjir</a></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-text me-3">
                Selamat datang di blog 
                <?php if (!isset($_SESSION['user'])) { ?>
                    silakan log in!!
                <?php } else { 
                    $putri = $_SESSION['user'];
                    if (cek_status($putri) == 1) {
                        echo "admin";
                    } else {
                        echo 'user: ' . $_SESSION['user'];
                    }
                } ?>
            </span>
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="btn btn-outline-light btn-sm me-2" href="logout.php">Logout</a>
            <?php } else { ?>
                <a class="btn btn-outline-light btn-sm me-2" href="log.php">Log in</a>
            <?php } ?>
            <form class="d-flex" role="search" method="get" action="">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
