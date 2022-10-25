<?php
include 'koneksi.php';

if ($_POST) {
  $id_berita = $_POST['id_berita'];
  $id_kategori = $_POST['id_kategori'];
  $judul_berita = $_POST['judul_berita'];
  $tanggal_berita = date("Y-m-d");
  $isi_berita = $_POST['isi_berita'];
  $slug = str_replace('+', '-', urlencode($judul_berita));

  if ($_FILES['gambar_berita']['name'] == '') {
    // jika gambar berita kosong
    $gambar_berita = $_POST['foto_lama'];
  } else {
    // jika gambar berita diganti (gambar berita baru)
    // pindahkan file
    $gambar_berita = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];
    $nama = uniqid() . $gambar_berita;

    // hapus gambar berita lama
    unlink('../assets_admin/img/berita' . $_POST['foto_lama']);
    var_dump($_POST['foto_lama']);
    // pindahkan gambar berita baru
    $terupload = move_uploaded_file($namaSementara, '../assets_admin/img/berita' . $nama);
  }

  $query = mysqli_query($koneksi, "UPDATE tb_berita SET id_kategori='$id_kategori', judul_berita='$judul_berita', slug='$slug', tanggal_berita='$tanggal_berita', isi_berita='$isi_berita', gambar_berita='$nama' WHERE id_berita='$id_berita'");

  if ($query) {
    echo "<script>alert('Data Berhasil Diubah!')
      window.location = 'index.php?page=berita/index'
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Diubah!')
      window.location = 'index.php?page=berita/ubah'
      </script>";
  }
}
