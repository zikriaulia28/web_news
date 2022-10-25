<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$_GET[id_kategori]'");
$data = mysqli_fetch_array($query);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Form Ubah Data Kategori</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-body">
          <form action="index.php?page=kategori/proses_ubah" method="POST">
            <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Ketegori" value="<?= $data['nama_kategori'] ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- / Content -->