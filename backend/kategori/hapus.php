<?php
include 'koneksi.php';

$id_kategori = $_GET['id_kategori'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori=$id_kategori");

if ($hapus) {
  echo "<script>alert('Data Berhasil Dihapus!')
      window.location = 'index.php?page=kategori/index'
      </script>";
} else {
  echo "<script>
      alert('Data Gagal Dihapus!')
      window.location = 'index.php?page=kategori/index'
      </script>";
}
