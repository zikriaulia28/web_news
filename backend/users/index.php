<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Bordered Table -->
    <div class="card">
      <h5 class="card-header">Data Users</h5>
      <div class="card-header" style="margin-top: -25px;">
        <a href="index.php?page=users/tambah" class="btn btn-primary">Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Username</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
              $no = 1;

              $query = mysqli_query($koneksi, 'SELECT * FROM tb_admin ORDER BY id_admin DESC');
              while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['username'] ?></td>
                  <td><?php if ($data['level'] == 'admin') : ?>
                      <span class="badge bg-primary"><?= $data['level'] ?></span>
                    <?php else : ?>
                      <span class="badge bg-warning"><?= $data['level'] ?></span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="index.php?page=users/ubah&id_admin=<?= $data['id_admin'] ?>" class="btn btn-success"><i class='bx bxs-edit'></i></a>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')" href="index.php?page=users/hapus&id_admin=<?= $data['id_admin'] ?>" class="btn btn-danger"><i class='bx bx-trash'></i></a>
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