<?php
include 'koneksi.php';

if ($_POST) {
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  $username = $_POST['username'];
  $level = $_POST['level'];

  $query = mysqli_query($koneksi, "INSERT INTO tb_admin(email,password,username,level) VALUES ('$email','$password','$username','$level')");

  if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan!')
      window.location = 'index.php?page=users/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan!')
      window.location = 'index.php?page=users/tambah.php'
      </script>";
  }
}
