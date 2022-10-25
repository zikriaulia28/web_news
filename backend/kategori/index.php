<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Bordered Table -->
    <div class="card">
      <h5 class="card-header">Data Kategori</h5>
      <div class="card-header" style="margin-top: -25px;">
        <a href="index.php?page=kategori/tambah" class="btn btn-primary">Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name Kategori</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;

              $query = mysqli_query(
                $koneksi,
                'SELECT * FROM tb_kategori ORDER BY id_kategori DESC'
              );
              while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nama_kategori'] ?></td>
                  <td>
                    <a href="index.php?page=kategori/ubah&id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-success"><i class='bx bxs-edit'></i></a>
                    <a href="index.php?page=kategori/hapus&id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-danger"><i class='bx bx-trash'></i></a>
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