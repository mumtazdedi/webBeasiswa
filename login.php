<?php
session_start();
if (isset($_SESSION['login'])) {
     header('Location: index.php');
     exit;
}

if (isset($_POST['register'])) {
     header('Location: registrasi.php');
     exit;
}

require 'functions.php';
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
                         <button class="btn btn-outline-success" name="register" type="submit">Register</button>
                    </form>
               </div>
          </div>
     </nav>
     <!-- akhir navbar -->

     <!-- judul -->
     <section class="home2">
          <!-- javascript -->
          <div class="jq container">
               <?php
               if (isset($_POST['login'])) {
                    if (login($_POST) > 0) {
                         echo "<script>
          alert('Login Berhasil');
          </script>";
                    } else {
                         echo "<p>Login Gagal</p>";
                    }
               }
               ?>
          </div>
          <!-- javascript -->
          <div class="sect1 jumbotron">
               <br>
               <h2>Login Admin</h2>
               <hr class="container">
               <p>Silahkan Login terlebih dahulu!</p>
          </div>
     </section>
     <!-- Akhir judul -->

     <!-- awal form -->
     <section class="sect">
          <div class="form login container">
               <br><br>
               <form action="" method="POST">
                    <div class="form-floating mb-3">
                         <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                         <label for="floatingInput">Username Anda</label>
                    </div>
                    <div class="form-floating mb-3">
                         <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
                         <label for="floatingInput">Password</label>
                    </div>
                    <div>
                         <input class="btn btn-primary" name="login" type="submit" value="Login">
                    </div>
                    <div class="tulisan">
                         <p>Belum memiliki akun admin? Silahkan klik <a href="registrasi.php">Register!</a></p>
                         <br>
                    </div>
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