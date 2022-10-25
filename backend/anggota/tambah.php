         <!-- Content -->
         <div class="container-xxl flex-grow-1 container-p-y">
           <h4 class="fw-bold py-3 mb-4">Form Tambah Data Anggota</h4>
           <!-- Basic Layout -->
           <div class="row">
             <div class="col-xl">
               <div class="card mb-4">
                 <div class="card-body">
                   <form action="index.php?page=anggota/proses_tambah" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Nama Anggota</label>
                       <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan Nama" />
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Jabatan</label>
                       <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan">
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Gambar Anggota</label>
                       <input type="file" name="gambar_anggota" class="form-control" />
                     </div>
                     <button type="submit" class="btn btn-primary">Send</button>
                   </form>
                 </div>
               </div>
             </div>
           </div>

         </div>
         <!-- / Content -->