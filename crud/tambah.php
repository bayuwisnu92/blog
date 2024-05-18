<?php
require_once '../init/init.php';
require_once 'view/header.php';
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $time = $_POST['time'];
    $tag = $_POST['tag'];

    menambah_kan($judul,$isi,$time,$tag);
}


?>
<form action="" method="post" class="form-group">
<input type="text" placeholder="judul" name="judul" class="form-control"><br><br>
<textarea name="isi" id="" cols="130" rows="20" placeholder="isi" class="form-control"></textarea><br><br>
<input type="text" placeholder="time" name="time" class="form-control"><br><br>
<input type="text" placeholder="tag" name="tag" class="form-control"><br><br>
<input type="submit" name=submit value="kirim" class="btn btn-primary">



</form>
<?php require_once 'footer.php'; ?>
