<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>ini adalah blogku</title>
</head>
<body class="bg-secondary" >
<!--java scriptnya -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!--navbar -->



  <nav class="navbar navbar-expand-lg  bg-dark mb-2" >
    <div class="container-fluid text-light">
      <a class="navbar-brand text-light" href="index.php">myblog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
          <li class="nav-item">

          </li>&nbsp;
          <li class="nav-item">
          <?php if(!isset($_SESSION['user'])){ ?>
            <a class="btn btn-outline-light " aria-current="page" href="regis.php">registrasi</a>&nbsp;&nbsp;
            <?php }else  ?>
          </li>
          <!--jika login dan logout yang akan tampil-->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              kahandap
            </a>
            <ul class="dropdown-menu">
              <li style="display:inline"><a class="dropdown-item" href="about.php">Action</a></li>
              <li><a class="dropdown-item" href="about.php">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <ul class="dropdown-item">
                <li><a class="dropdown-item " href="about.php">didieu anjir </a></li>
              </ul>
            </ul>
          </li>
          <li class="d-flex">
          <h5 style="display:inline" class="mt-2"> &nbsp; &nbsp; &nbsp; selamat datang di blog
              <?php if(!isset($_SESSION['user'])){
                echo 'silakan log in!!';
          }else{
              $putri = $_SESSION['user'];
              if (cek_status($putri) == 1) {
                echo "admin";
              }else{
              echo 'user: '. $_SESSION['user'];
            }
          }
           ?> </h5>&nbsp;
          <li class="nav-item bt-1">
            <?php if(isset($_SESSION['user'])){ ?>
            <a class="btn btn-outline-light btn-sm " href="logout.php">logout</a>&nbsp;
           <?php }else{ ?>
              <a href="log.php"  class="btn btn-outline-light" aria-current="page">log in</a>&nbsp;
           <?php } ?>
          </li>

          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<!--  <div class="container">-->
