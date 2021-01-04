<?php
require "functions.php";
if (isset($_POST['loginn'])) {
     header('Location: login.php');
     exit;
}
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
                              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="login.php">Admin</a>
                         </li>
                    </ul>
                    <form class="d-flex" action="" method="POST">
                         <button class="btn btn-outline-success" name="loginn" type="submit">Login</button>
                    </form>
               </div>
          </div>
     </nav>
     <!-- akhir navbar -->


     <!-- judul -->
     <section class="home3">
          <!-- javascript -->
          <div class="jq container">
               <?php
               if (isset($_POST['register'])) {
                    if (registrasi($_POST) > 0) {
                         echo "<script>
          alert('Registrasi Berhasil');
          document.location.href = 'login.php';
          </script>";
                    } else {
                         echo "<p>Registrasi Gagal</p>";
                    }
               }
               ?>
          </div>
          <!-- javascript -->
          <div class="sect1 jumbotron">
               <br>
               <h2>Registrasi Admin</h2>
               <hr class="container">
               <p>Silahkan daftarkan diri anda menjadi administrator</p>
          </div>
     </section>
     <!-- Akhir judul -->

     <!-- awal form -->
     <section class="sect">
          <div class="form register container">
               <br><br>
               <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                         <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                         <label for="floatingInput">Username Anda</label>
                    </div>
                    <div class="form-floating mb-3">
                         <input type="file" name="fileupload" class="form-control" id="floatingInput" placeholder="Upload foto profil anda">

                    </div>
                    <div class="form-floating mb-3">
                         <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
                         <label for="floatingInput">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                         <input type="password" name="password2" class="form-control" id="floatingInput" placeholder="Konfirmasi">
                         <label for="floatingInput">Konfirmasi Password</label>
                    </div>
                    <div>
                         <input class="btn btn-primary" name="register" type="submit" value="Register">
                    </div>
                    <br>
               </form>
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