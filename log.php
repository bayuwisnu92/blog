<?php
require_once "init.php";
$error='';
if( isset($_SESSION['user'])){
    header('Location: index.php');
}
// form data log in
if (isset($_POST['submit'])) {
    $nam=$_POST['nama'];
    $pass=$_POST['password'];
    if(!empty(trim($nam))&& !empty(trim($pass))){
        if(register_cek($_POST)==!0){

            $_SESSION['user'] = $nam;
            header('Location: index.php');
        }else {
            $error= "nama belum terdaftar";
        }
    } else{
        $error= "data tidak boleh kosong";
    }
}

?>
<main>

<?php require_once "header.php"; ?>
<!--jika user masuk log in maka akan membawa seassonya user-->
<div class="container">


<div id="pesan">
    <?php $pesan=''; ?>
<?php if(isset($_SESSION['msg'])){
    $pesan= $_SESSION['msg'];
    unset($_SESSION['msg']);
} ?>
</div>
<h1 class="text-primary">log in <?php echo $pesan ?></h1>
<!--form register-->
<form action="log.php" method="post" class="was-validated">
  <div class="mb-3 mt-3">
    <label for="uname" class="form-label text-danger">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="input username" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">kudu diisi koplok.</div>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label text-danger">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">eh dibejaan kudu diisi .</div>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
    <label class="form-check-label" for="myCheck">I agree to login.</label>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">diceklis ieu koplok mun rek lanjut.</div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <?php if($error !=0){ ?>
      <div class="">
      <?php echo "$error"; ?>
      </div>
  <?php } ?>
</form>

</main>
</div>
