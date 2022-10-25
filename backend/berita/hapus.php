<?php
include 'koneksi.php';

$id_berita = $_GET['id_berita'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita=$id_berita");

if ($hapus) {
  echo "<script>alert('Data Berhasil Dihapus!')
      window.location = 'index.php?page=berita/index'
      </script>";
} else {
  echo "<script>
      alert('Data Gagal Dihapus!')
      window.location = 'index.php?page=berita/index'
      </script>";
}
