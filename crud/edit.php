<?php
require_once dirname(__DIR__).'/init/init.php';

//require_once 'init/init.php';
require_once 'view/header.php';
//require_once 'header.php';
$id =$_GET['id'];

if(isset($_GET['id'])){
    $arti= mengedit_kan($id);
    while($row=mysqli_fetch_assoc($arti)) :
        $judul = $row['judul'];
        $isi=$row['isi'];
        $time =$row['waktu'];
        $tag=$row['tag'];
    endwhile;
}
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $time = $_POST['time'];
    $tag = $_POST['tag'];
     rubah_kan($judul,$isi,$time,$tag,$id);
}
?>
<form action="" method="post" class="form-group">
<input type="text" placeholder="judul" name="judul" class="form-control" value="<?php echo $judul; ?>"><br><br>
<textarea class="form-control" name="isi" id="" cols="130" rows="20" placeholder="isi"><?php echo $isi ?></textarea><br><br>
<input class="form-control" type="text" placeholder="time" name="time" value="<?php echo $time; ?>"><br><br>
<input class="form-control" type="text" placeholder="tag" name="tag" value="<?php echo $tag; ?>"><br><br>
<input class="btn btn-primary" type="submit" name=submit value="kirim">

</form>
<?php require_once 'footer.php'; ?>
