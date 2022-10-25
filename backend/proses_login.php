<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = sha1($_POST['password']);

  //cek data form database
  $admin = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");

  // cek jumlah data hasil query
  // var_dump();
  // die();
  if (mysqli_num_rows($admin) > 0) {
    // pecah data admin
    $data = mysqli_fetch_assoc($admin);

    // simpan datanya ke session
    session_start();
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    echo "<script>alert('Login Berhasil');
      window.location='index.php'
      </script>";
  } else {
    echo "<script>alert('Email Atau Password Salah');
      window.location='login.php'
      </script>";
  }
}
