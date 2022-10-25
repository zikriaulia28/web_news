         <!-- Content -->
         <div class="container-xxl flex-grow-1 container-p-y">
           <h4 class="fw-bold py-3 mb-4">Form Tambah Data Kategori</h4>
           <!-- Basic Layout -->
           <div class="row">
             <div class="col-xl">
               <div class="card mb-4">
                 <div class="card-body">
                   <form action="index.php?page=berita/proses_tambah" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Kategori Berita</label>
                       <select name="id_kategori" id="" class="form-control">
                         <option value="">Silahkan Pilih Kategori</option>
                         <?php
                          include 'koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                          while ($data_kategori = mysqli_fetch_array($query)) {
                          ?>
                           <option value="<?= $data_kategori['id_kategori'] ?>">
                             <?= $data_kategori['nama_kategori'] ?>
                           </option>
                         <?php } ?>
                       </select>
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Judul Berita</label>
                       <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Nama Ketegori" />
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Isi Berita</label>
                       <textarea name="isi_berita" id="editor1" rows="5" class="form-control"></textarea>
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Gambar Berita</label>
                       <input type="file" name="gambar_berita" class="form-control" />
                     </div>
                     <button type="submit" class="btn btn-primary">Send</button>
                   </form>
                 </div>
               </div>
             </div>
           </div>

         </div>
         <!-- / Content -->