<?php
include 'koneksi.php';

if ($_POST) {
  $id_kategori = $_POST['id_kategori'];
  $judul_berita = $_POST['judul_berita'];
  $tanggal_berita = date("Y-m-d");
  $isi_berita = $_POST['isi_berita'];
  $slug = str_replace('+', '-', urlencode($judul_berita));

  // ambil data file
  $gambar_berita = $_FILES['gambar_berita']['name'];
  $namaSementara = $_FILES['gambar_berita']['tmp_name'];
  $nama = uniqid() . $gambar_berita;

  // pindahkan file
  $terupload = move_uploaded_file($namaSementara, '../assets_admin/img/berita/' . $nama);

  $query = mysqli_query($koneksi, "INSERT INTO tb_berita(id_kategori,judul_berita,slug,tanggal_berita,isi_berita,gambar_berita) VALUES ('$id_kategori','$judul_berita','$slug','$tanggal_berita','$isi_berita','$nama')");

  if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan!')
      window.location = 'index.php?page=berita/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan!')
      window.location = 'index.php?page=berita/tambah.php'
      </script>";
  }
}
