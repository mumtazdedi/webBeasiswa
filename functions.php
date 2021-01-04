<?php

function koneksi()
{
     //koneksi ke DB dan pilih DB
     return mysqli_connect('localhost', 'root', '', 'datamhs');
}

function query($query)
{
     $conn = koneksi();
     //query 
     $result = mysqli_query($conn, $query);

     //jika yang dihasilkan hanya 1 data
     // if (mysqli_num_rows($result) == 1) {
     //     return mysqli_fetch_assoc($result);
     // } 

     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }

     return $rows;
}

function tambah($data)
{
     $conn = koneksi();
     $email = htmlspecialchars($data['email']);
     $nama = htmlspecialchars($data['nama']);
     $jurusan = htmlspecialchars($data['jurusan']);

     $query = "INSERT INTO 
                mahasiswa 
                VALUES (null,'$email', '$nama', '$jurusan');
                ";
     mysqli_query($conn, $query);

     echo mysqli_error($conn);
     return mysqli_affected_rows($conn);
}

function ubah($data)
{
     $conn = koneksi();
     $id = $data['id'];
     $email = htmlspecialchars($data['email']);
     $nama = htmlspecialchars($data['nama']);
     $jurusan = htmlspecialchars($data['jurusan']);

     $query = "UPDATE
                mahasiswa 
                SET email = '$email', nama = '$nama', jurusan = '$jurusan' WHERE id = '$id'
                ";
     mysqli_query($conn, $query);

     echo mysqli_error($conn);
     return mysqli_affected_rows($conn);
}

function hapus($id)
{
     $conn = koneksi();
     mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$id'") or die(mysqli_error($conn));

     return mysqli_affected_rows($conn);
}

function registrasi($data)
{
     $conn = koneksi();
     $username = strtolower($data['username']);
     $fileupload = upload();
     if (!$fileupload) {
          return false;
     }
     $password = mysqli_real_escape_string($conn, $data['password']);
     $password2 = mysqli_real_escape_string($conn, $data['password2']);

     $query = "SELECT 
                username FROM user
                WHERE username = '$username';
                ";
     $res = mysqli_query($conn, $query);

     if (mysqli_fetch_assoc($res)) {
          echo "<script>
          alert('Username sudah digunakan!')
          </script>";
          return false;
     }

     if ($password != $password2) {
          echo "<script>
          alert('Konfirmasi password salah!')
          </script>";
          return false;
     }


     $password = password_hash($password, PASSWORD_DEFAULT);

     $query = "INSERT INTO 
                user 
                VALUES (null,'$username', '$fileupload', '$password');
                ";
     mysqli_query($conn, $query);

     echo mysqli_error($conn);
     return mysqli_affected_rows($conn);
}

function upload()
{
     $namafile = $_FILES['fileupload']['name'];
     $ukuranfile = $_FILES['fileupload']['size'];
     $error = $_FILES['fileupload']['error'];
     $tmpname = $_FILES['fileupload']['tmp_name'];

     if ($error == 4) {
          echo "<script>
          alert('pilih gambar terlebih dahulu!');
          </script>";
     }

     $ekstensivalid = ['jpg', 'jpeg', 'png'];
     $ekstensiupload = explode('.', $namafile);
     $ekstensiupload = strtolower(end($ekstensiupload));
     if (!in_array($ekstensiupload, $ekstensivalid)) {
          echo "<script>
          alert('Yang anda upload bukan gambar!');
          </script>";
          return false;
     }

     if ($ukuranfile > 5000000) {
          echo "<script>
          alert('Ukuran file terlalu besar!');
          </script>";
          return false;
     }

     $namabaru = uniqid();
     $namabaru .= '.';
     $namabaru .= $ekstensiupload;

     move_uploaded_file($tmpname, 'img/' . $namabaru);

     return $namabaru;
}

function login($data)
{
     $conn = koneksi();
     $username = $data['username'];
     $password = $data['password'];

     $query = "SELECT 
                * FROM user
                WHERE username = '$username';
                ";
     $res = mysqli_query($conn, $query);

     if (mysqli_num_rows($res) == 1) {
          $row = mysqli_fetch_assoc($res);

          if (password_verify($password, $row['password'])) {

               $_SESSION['login'] = true;
               $_SESSION['username'] = $row['username'];
               $_SESSION['fileupload'] = $row['fileupload'];

               header('Location: index.php');
               exit;
          }
     }
}
