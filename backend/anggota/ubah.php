<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$_GET[id_anggota]'");
$data = mysqli_fetch_array($query);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Form Ubah Data Anggota</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-body">
          <form action="index.php?page=anggota/proses_ubah" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_anggota" value="<?= $data['id_anggota'] ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Anggota</label>
              <input type="text" name="nama_anggota" class="form-control" value="<?= $data['nama_anggota'] ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Jabatan</label>
              <input type="text" name="jabatan" class="form-control" value="<?= $data['jabatan'] ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Gambar Anggota</label><br>
              <img src="../assets_admin/img/anggota/<?= $data['gambar_anggota'] ?>" width="100px">
              <input type="file" name="gambar_anggota" class="form-control" />
              <input type="hidden" name="foto_lama" value="<?= $data['gambar_anggota'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- / Content -->