<?php
session_start();
if (!isset($_SESSION['login'])) {
     header('Location: login.php');
     exit;
}

if (isset($_POST['logout'])) {
     session_unset();
     session_destroy();
     header('Location: login.php');
     exit;
}

require "functions.php";
?>
<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
     <title>Hello, world!</title>
</head>

<body class="body">

     <!-- javascript -->
     <div class="jq container">
          <?php
          if (isset($_POST['tambah'])) {
               if (tambah($_POST) > 0) {
                    echo "<script>
          alert('Data anda berhasil ditambahkan');
          document.location.href = 'form.php';
          </script>";
               } else {
                    echo "<p><font>Data yang anda masukkan salah</p></font>";
               }
          }
          ?>
     </div>
     <!-- javascript -->

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
               <a class="navbar-brand" href="#">Beasiswa JPO</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" href="form.php">Form</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="data.php">Data</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="login.php">Admin</a>
                         </li>
                    </ul>
                    <form class="d-flex" action="" method="POST">
                         <button class="btn btn-outline-success" name="logout" type="submit">Logout</button>
                    </form>
               </div>
          </div>
     </nav>
     <!-- akhir navbar -->

     <!-- judul -->
     <section class="home">
          <div class="sect1 jumbotron">
               <br>
               <h2>Form Tambah Data</h2>
               <hr class="container">
               <p>Silahkan diisi</p>
          </div>
     </section>
     <!-- Akhir judul -->

     <!-- awal form -->
     <section class="sect">
          <div class="form tambah container">
               <br><br>
               <form action="" method="POST">
                    <div class="form-floating mb-3">
                         <input type="email" name="email" class="form-control" id="floatingInput" placeholder="blablabla@email.com" required>
                         <label for="floatingInput">Alamat Email</label>
                    </div>
                    <div class="form-floating mb-3">
                         <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama" required>
                         <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                         <select class="form-select" name="jurusan">
                              <option selected>Pilih Jurusan Anda</option>
                              <option value="Informatika">Informatika</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                         </select>
                    </div>
                    <div>
                         <input class="btn btn-primary" name="tambah" type="submit" value="Selesai">
                    </div>
               </form>
               <br>
          </div>
     </section>
     <!-- akhir form -->

     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.js"></script>
     <script src="jquery-3.5.1.js"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>