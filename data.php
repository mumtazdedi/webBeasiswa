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

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Admin</a>
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
            <h2>Data Mahasiswa</h2>
            <hr class="container">
            <p>Dikelola oleh admin</p>
        </div>
    </section>
    <!-- Akhir judul -->

    <!-- awal data -->
    <section class="sect">
        <div class="container">
            <br><br>
            <table cellpadding="20" class="container table table-striped table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
                <?php $i = 1;
                foreach ($mahasiswa as $m) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $m['email']; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['jurusan']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $m['id']; ?>">
                                <font>Ubah</font>
                            </a> | <a href=" hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Apakah anda yakin?');">
                                <font>Hapus</font>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </section>
    <!-- akhir data -->

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