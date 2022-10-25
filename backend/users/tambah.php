         <!-- Content -->
         <div class="container-xxl flex-grow-1 container-p-y">
           <h4 class="fw-bold py-3 mb-4">Form Tambah Data User</h4>
           <!-- Basic Layout -->
           <div class="row">
             <div class="col-xl">
               <div class="card mb-4">
                 <div class="card-body">
                   <form action="index.php?page=users/proses_tambah" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Email</label>
                       <input type="email" name="email" class="form-control" placeholder="Masukkan Email" />
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Username</label>
                       <input type="text" name="username" class="form-control" placeholder="Masukkan Username" />
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Password</label>
                       <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                     </div>
                     <div class="mb-3">
                       <label class="form-label" for="basic-default-fullname">Level</label>
                       <select name="level" class="form-control">
                         <option value="">Silahkan Pilih Level User</option>
                         <option value="admin">Admin</option>
                         <option value="author">Author</option>
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