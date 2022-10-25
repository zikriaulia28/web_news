<?php
include 'koneksi.php';

if ($_POST) {
  $nama_kategori = $_POST['nama_kategori'];

  $tambah = mysqli_query($koneksi, "INSERT INTO tb_kategori(nama_kategori) VALUES('$nama_kategori')");

  if ($tambah) {
    echo "<script>alert('Data Berhasil Ditambahkan!')
      window.location = 'index.php?page=kategori/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan!')
      window.location = 'index.php?page=kategori/tambah.php'
      </script>";
  }
}
