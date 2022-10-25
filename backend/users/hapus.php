<?php
include 'koneksi.php';

$id_admin = $_GET['id_admin'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin=$id_admin");

if ($hapus) {
  echo "<script>alert('Data Berhasil Dihapus!')
      window.location = 'index.php?page=users/index'
      </script>";
} else {
  echo "<script>
      alert('Data Gagal Dihapus!')
      window.location = 'index.php?page=users/index'
      </script>";
}
