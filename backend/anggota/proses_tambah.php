<?php
include 'koneksi.php';

if ($_POST) {
  $nama_anggota = $_POST['nama_anggota'];
  $jabatan = $_POST['jabatan'];



  // ambil data file
  $gambar_anggota = $_FILES['gambar_anggota']['name'];
  $namaSementara = $_FILES['gambar_anggota']['tmp_name'];
  $nama = uniqid() . $gambar_anggota;

  // pindahkan file
  $terupload = move_uploaded_file($namaSementara, '../assets_admin/img/anggota/' . $nama);

  $query = mysqli_query($koneksi, "INSERT INTO tb_anggota(nama_anggota,jabatan,gambar_anggota) VALUES ('$nama_anggota','$jabatan','$nama')");

  if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan!')
      window.location = 'index.php?page=anggota/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan!')
      window.location = 'index.php?page=anggota/tambah.php'
      </script>";
  }
}
