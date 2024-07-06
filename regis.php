<?php
require_once "init/init.php";
$error = '';

// Jika user sudah login
require_once "view/header.php";

if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Cek data
if (isset($_POST['submit'])) {
    global $konek;
    if (register_cek($_POST) == 0) {
        if (register_user($_POST) > 0) {
            //echo "<script>alert('data berhasil dimasukan')</script>";
            header('Location: log.php');
            exit();
        } else {
            $error = "Data tidak boleh kosong";
        }
    } else {
        $error = "Data sudah ada";
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Registrasi</h1>
                </div>
                <div class="card-body">
                    <form action="regis.php" method="post" class="was-validated">
                        <div class="mb-3 mt-3">
                            <label for="uname" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="nama" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                            <label class="form-check-label" for="myCheck">I agree to login.</label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
                        <?php if ($error != '') { ?>
                            <div class="alert alert-warning mt-2">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
}, false);
</script>

<?php require_once 'view/footer.php'; ?>
