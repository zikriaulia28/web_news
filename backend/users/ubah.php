<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$_GET[id_admin]'");
$data = mysqli_fetch_array($query);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Form Ubah Data User</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-body">
          <form action="index.php?page=users/proses_ubah" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?= $data['email'] ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="<?= $data['username'] ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Level</label>
              <select name="level" class="form-control">
                <option value="">Silahkan Pilih Level User</option>
                <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>> Admin </option>
                <option value="author" <?= $data['level'] == 'author' ? 'selected' : '' ?>>Author</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- / Content -->