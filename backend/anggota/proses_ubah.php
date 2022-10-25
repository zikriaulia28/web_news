<?php
include 'koneksi.php';

if ($_POST) {
  $id_anggota = $_POST['id_anggota'];
  $nama_anggota = $_POST['nama_anggota'];
  $jabatan = $_POST['jabatan'];

  if ($_FILES['gambar_anggota']['name'] == '') {
    // jika gambar anggota kosong
    $gambar_anggota = $_POST['foto_lama'];
  } else {
    // jika gambar anggota diganti (gambar anggota baru)
    // pindahkan file
    $gambar_anggota = $_FILES['gambar_anggota']['name'];
    $namaSementara = $_FILES['gambar_anggota']['tmp_name'];
    $nama = uniqid() . $gambar_anggota;

    // hapus gambar anggota lama
    unlink('../assets_admin/img/anggota' . $_POST['foto_lama']);
    var_dump($_POST['foto_lama']);
    // pindahkan gambar anggota baru
    $terupload = move_uploaded_file($namaSementara, '../assets_admin/img/anggota' . $nama);
  }

  $query = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_anggota='$nama_anggota', jabatan='$jabatan', gambar_anggota='$nama' WHERE id_anggota='$id_anggota'");

  // if ($query) {
  //   echo "<script>alert('Data Berhasil Diubah!')
  //     window.location = 'index.php?page=anggota/index'
  //     </script>";
  // } else {
  //   echo "<script>
  //     alert('Data Gagal Diubah!')
  //     window.location = 'index.php?page=anggota/ubah'
  //     </script>";
  // }
}
