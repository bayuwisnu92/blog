<?php
require_once "init/init.php";
$error = '';

if (isset($_SESSION['user'])) {
    header('Location: halaman.php?id=69');
    exit();
}

// Form data log in
if (isset($_POST['submit'])) {
    $nam = $_POST['nama'];
    $pass = $_POST['password'];

    if (!empty($nam) && !empty($pass)) {
        if (register_cek($_POST)) {
            $_SESSION['user'] = $nam;

            if (isset($_GET['id']) && $_GET['id'] == 69) {
                header('Location: halaman.php?id=69');
            } else {
                header('Location: index.php');
            }
            exit();
        } else {
            $error = "Nama belum terdaftar";
        }
    } else {
        $error = "Data tidak boleh kosong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<?php require_once "view/header.php"; ?>
<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center text-primary">Log In</h1>
                    <?php if ($error != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                    <form action="log.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" class="form-control" id="uname" placeholder="Input username" name="nama" required>
                            <div class="invalid-feedback">Kudu diisi koplok.</div>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                            <div class="invalid-feedback">Eh dibejaan kudu diisi.</div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                            <label class="form-check-label" for="myCheck">I agree to login</label>
                            <div class="invalid-feedback">Diceklis ieu koplok mun rek lanjut.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</body>
</html>
