<?php
session_start();
if (!isset($_SESSION['login'])) {
     header('Location: awal.php');
     exit;
}

if (isset($_POST['logout'])) {
     session_unset();
     session_destroy();
     header('Location: login.php');
     exit;
}

require 'functions.php';

$user = $_SESSION['username'];
$gambarr = $_SESSION['fileupload'];
?>

<!doctype html>
<html lang="en" id="awal">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
     <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
     <title>Hello, world!</title>
</head>

<body class="body">

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container-fluid">
               <a class="navbar-brand page-scroll" href="#awal"><i class="fas fa-graduation-cap"></i> JPO</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="form.php">Form</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="data.php">Data</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="login.php">Admin</a>
                         </li>
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Sub Menu
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                   <li><a class="dropdown-item page-scroll" href="#gambar">Gambar</a></li>
                                   <li><a class="dropdown-item page-scroll" href="#detail">Keterangan Beasiswa</a></li>
                                   <li><a class="dropdown-item page-scroll" href="#kontak">Kontak</a></li>
                              </ul>
                    </ul>
                    <form class="d-flex gap-2" action="" method="POST">
                         <button class="btn btn-outline-success"><?= $user ?></button>
                         <button class="btn btn-outline-success" name="logout" type="submit">Logout</button>
                         <img width="50px" height="50px" class="rounded-circle" src="img/<?php echo $gambarr; ?>" alt="">
                    </form>
               </div>
          </div>
     </nav>
     <!-- akhir navbar -->

     <!-- space -->
     <section class="kepala">
     </section>
     <!-- akhir space -->


     <!-- judul -->
     <section class="homee">
          <div class="sect1 jumbotron">
               <br>
               <h2>Selamat Datang!</h2>
               <hr class="container">
               <p>Silahkan melihat-lihat dahulu</p>
          </div>
     </section>
     <!-- Akhir judul -->

     <section class="sect" id="gambar">
          <div>
               <br>
               <h2>Gambar</h2>
               <hr class="container">

               <!-- awal carousel -->
               <div id="carouselExampleInterval" class="carousel slide caro container" data-bs-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item active" data-bs-interval="5000">
                              <img src="img/1.jpg" class="d-block w-100" alt="flat1">
                         </div>
                         <div class="carousel-item" data-bs-interval="5000">
                              <img src="img/2.jpg" class="d-block w-100" alt="flat2">
                         </div>
                         <div class="carousel-item" data-bs-interval="5000">
                              <img src="img/3.png" class="d-block w-100" alt="flat3">
                         </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                    </a>
               </div>
               <!-- akhir carousel -->
          </div>
     </section>

     <!-- awal keterangan -->
     <section class="homee sect3" id="detail">
          <div>
               <br>
               <h2>Beasiswa Jarum Pentul Open</h2>
               <hr class="container">
               <p>Selamat datang, kawan. Ini adalah website untuk pendaftaran beasiswa JPO.</p>
          </div>
     </section>
     <!-- akhir keterangan -->

     <!-- awal kontak -->
     <section class="sect4" id="kontak">
          <div>
               <br>
               <h2>Kontak</h2>
               <hr class="container">
               <p>Silahkan Hubungi kontak di bawah ini jika ada pertanyaan lebih lanjut. Jangan sungkan sungkan yaa! <br><br>
                    <br>
               <div class="tabel">
                    <table cellpadding="7">
                         <tr class="tabel1">
                              <td><a href="http://www.instagram.com">@JPO_official</a></td>
                              <td><a href="http://www.twitter.com">@JPO_offi</a></td>
                              <td><a href="http://www.whatsapp.com">087897654321</a></td>
                         </tr>
                         <tr class="tabel1">
                              <td><i class="fab fa-instagram-square"></i></td>
                              <td><i class="fab fa-twitter-square"></i></td>
                              <td><i class="fab fa-whatsapp-square"></i></td>
                         </tr>
                    </table>
               </div>
               </p>
          </div>
     </section>
     <!-- akhir kontak -->

     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="jquery-3.5.1.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/bootstrap.js"></script>
     <script src="fontawesome-free-5.15.1-web/js/all.js"></script>
     <script src="js/script.js"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>