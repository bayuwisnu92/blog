<?php require_once 'init.php'; ?>
<?php
require_once 'header.php';
// jika user belum login //
if( !isset($_SESSION['user'])){
    $_SESSION['msg'] = 'dulu bro!!';
    header('Location: log.php');
}
$status = $_SESSION['user'];
$idi= cek_status($status);

?>
<div class="container">
<!--ini membuat colom-->
<?php if(isset($_SESSION['user'])){ ?>
  <?php if($idi != 0){ ?>
  <a class="btn btn-primary mb-1" aria-current="page" href="tambah.php">artikel+</a>
 <?php }else ?>
<?php }else  ?>




<!--<div class=>
<div class="">

</div>

</div>colom pertama-->
<?php  $semua = menambahkan(); ?>
      <div class="row ">
        <div class="col-3 bg-dark text-warning">
          <div class="row bg-light">
              <?php foreach ($semua as $row): ?>
                <div class="col-12 card mb-1 mr-1 ml-1" >
                  <a href="halaman.php?id=<?php echo $row['id']; ?>" class="btn btn-light btn-sm">
                    <div class="card-body">
                      <h5 class="mr-20" ><?php echo 'JUDUL :'.$row['judul']; ?>  </h5>
                      <p><?php echo ' '. excerpt($row['isi']); ?></p>
                     <?php $status = $_SESSION['user'];
                      $idi= cek_status($status); ?>
                      <?php if($idi != 0){ ?>
                      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><img src="edit.png" height="21" width="21"></a>
                      <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><img src="hapus.png" height="21" width="21"></a>
                      <?php  } ?>
                      <h5 style='display:inline'>tag:<?php echo $row['tag']; ?></h5>
                    </div>
                  </a>
              </div>
              <?php endforeach; ?>
          </div>

        </div
<!--colom kedua -->
</div>

    <!--akhir kolom isi-->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php require_once 'footer.php';
