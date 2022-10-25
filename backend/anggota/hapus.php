<?php
include 'koneksi.php';

$id_anggota = $_GET['id_anggota'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id_anggota=$id_anggota");

if ($hapus) {
  echo "<script>alert('Data Berhasil Dihapus!')
      window.location = 'index.php?page=anggota/index'
      </script>";
} else {
  echo "<script>
      alert('Data Gagal Dihapus!')
      window.location = 'index.php?page=anggota/index'
      </script>";
}
