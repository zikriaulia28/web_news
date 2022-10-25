<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$_GET[id_berita]'");
$data = mysqli_fetch_array($query);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Form Ubah Data Berita</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-body">
          <form action="index.php?page=berita/proses_ubah" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_berita" value="<?= $data['id_berita'] ?>">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Kategori Berita</label>
              <select name="id_kategori" id="" class="form-control">
                <option value="">Silahkan Pilih Kategori</option>
                <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                while ($data_kategori = mysqli_fetch_array($query)) {
                ?>
                  <option value="<?= $data_kategori['id_kategori'] ?>" <?= $data_kategori['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
                    <?= $data_kategori['nama_kategori'] ?>
                  </option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Judul Berita</label>
              <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Nama Ketegori" value="<?= $data['judul_berita'] ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Isi Berita</label>
              <textarea name="isi_berita" id="" rows="5" class="form-control">
                <?= $data['isi_berita'] ?>
              </textarea>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Gambar Berita</label><br>
              <img src="../assets_admin/img/berita/<?= $data['gambar_berita'] ?>" width="100px">
              <input type="file" name="gambar_berita" class="form-control" />
              <input type="hidden" name="foto_lama" value="<?= $data['gambar_berita'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- / Content -->