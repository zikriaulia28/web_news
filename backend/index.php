<?php

session_start();
if (!isset($_SESSION['id_admin'])) {
  echo "<script>alert('Harap Login Terlebih Dahulu')
  window.location='login.php'
  </script>";
}


include 'components/header.php';
include 'components/sidebar.php';
include 'content.php';
include 'components/footer.php';
