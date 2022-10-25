<?php
include 'koneksi.php';

if ($_POST) {
  $id_admin = $_POST['id_admin'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $level = $_POST['level'];

  $query = mysqli_query($koneksi, "UPDATE tb_admin SET email='$email', username='$username', level='$level' WHERE id_admin='$id_admin'");

  if ($query) {
    echo "<script>alert('Data Berhasil Diubah!')
      window.location = 'index.php?page=users/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Diubah!')
      window.location = 'index.php?page=users/ubah.php'
      </script>";
  }
}
