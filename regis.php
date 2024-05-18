<?php
require_once "init/init.php";
$error ='';
//kalau user sudah log in
 require_once "view/header.php";

if( isset($_SESSION['user'])){
    header('Location:index.php');
}
//cek data
if (isset($_POST['submit'])) {
    global $konek;
    if(register_cek($_POST)==0){
        if((register_user($_POST)>0)){
            //echo "<script>alert('data berhasil dimasukan')</script>";
            header('Location: log.php');
        }else{
            $error = "tidak boleh kosong";
        }
    }else $error= "data sudah ada";
}
?>


<div class="container">


<h1 class="text-primary">registrasi</h1>
<form action="regis.php" method="post" class="was-validated">
  <div class="mb-3 mt-3">
    <label for="uname" class="form-label text-danger">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label text-danger">Password:</label>
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
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <?php if($error !=0){ ?>
      <div class="text-warning">
      <?php echo "$error"; ?>
      </div>
  <?php } ?>
</form>
</div>
