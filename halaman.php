<?php
require_once 'init/init.php';
require_once 'view/header.php';


//menagkap id
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
?>
<div class="container-fluid text-center ">
 <?php  $semua = menambahkan(); ?>
       <div class="row ">
         <div class="col-3 bg-dark text-warning">
           <div class="row bg-light">
               <?php foreach ($semua as $row): ?>
                 <div class="col-12 card mb-1 mr-1 ml-1" >
                   <a href="?id=<?php echo $row['id']; ?>" class="btn btn-light btn-sm">
                     <div class="card-body">
                       <h5 class="mr-20" ><?php echo 'JUDUL :'.$row['judul']; ?>  </h5>
                       <p><?php echo ' '. excerpt($row['isi']); ?></p>
                      <?php $status = $_SESSION['user'];
                       $idi= cek_status($status); ?>
                       <?php if($idi != 0){ ?>
                       <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><img src="asset/edit.png" height="21" width="21"></a>
                       <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><img src="asset/hapus.png" height="21" width="21"></a>
                       <?php  } ?>
                       <h5 style='display:inline'>tag:<?php echo $row['tag']; ?></h5>
                     </div>
                   </a>
               </div>
               <?php endforeach; ?>
           </div>

         </div>&nbsp;
         <div class="col-8">
           <!--colom halaman lihat-->
           <div class="form-group bg-light">
             <div class="card">
           <h1> <?php echo $judul; ?></h1><br><br>
           <textarea class="form-control" name="isi" id="" cols="140" rows="30" placeholder="isi">
           <?php echo $isi; ?></textarea><br><br>
           <p>time:<?php echo $time; ?> </p>
           <p>tag:<?php echo $tag; ?></p>
           <a href="edit.php?id=<?php echo $id ?>">edit</a>
           </div>
           </div>
           <!--colom halaman lihat-->
         </div>

       </div>

     </div>
<?php require_once 'footer.php'; ?>
