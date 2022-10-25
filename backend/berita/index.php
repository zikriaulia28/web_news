<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Bordered Table -->
    <div class="card">
      <h5 class="card-header">Data Berita</h5>
      <div class="card-header" style="margin-top: -25px;">
        <a href="index.php?page=berita/tambah" class="btn btn-primary">Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Kategori Berita</th>
                <th>Tanggal Berita</th>
                <th>Isi Berita</th>
                <th>Gambar Berita</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;

              $query = mysqli_query(
                $koneksi,
                'SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC'
              );
              while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['judul_berita'] ?></td>
                  <td><?= $data['nama_kategori'] ?></td>
                  <td><?= $data['tanggal_berita'] ?></td>
                  <td><?= substr($data['isi_berita'], 0, 100) ?></td>
                  <td><img src="../assets_admin/img/berita/<?= $data['gambar_berita'] ?>" width="80px"></td>
                  <td>
                    <a href="index.php?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>" class="btn btn-success"><i class='bx bxs-edit'></i></a>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')" href="index.php?page=berita/hapus&id_berita=<?= $data['id_berita'] ?>" class="btn btn-danger"><i class='bx bx-trash'></i></a>
                  </td>
                </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--/ Bordered Table -->

  </div>
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->