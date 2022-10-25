         <!-- Content -->

         <div class="container-xxl flex-grow-1 container-p-y">


           <h4 class="fw-bold py-3 mb-4">Form Tambah Data Kategori</h4>

           <!-- Basic Layout -->
           <div class="row">
             <div class="col-xl">
               <div class="card mb-4">
                 <div class="card-body">
                   <form action="index.php?page=kategori/proses_tambah" method="POST">
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
                       <input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Ketegori" />
                     </div>
                     <button type="submit" class="btn btn-primary">Send</button>
                   </form>
                 </div>
               </div>
             </div>
           </div>

         </div>
         <!-- / Content -->