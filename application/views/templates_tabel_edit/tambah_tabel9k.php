    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9k</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kode Matakuliah</label>
                    <input type="text" name="kode_matkul"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Matakuliah</label>
                    <input type="text" name="nama_matkul"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kelas</label>
                    <input type="text" name="kelas"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="nama_dsn"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Peserta</label>
                    <input type="number" name="jumlah_mhs"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">IPK Kelas</label>
                    <input type="text" name="ipk_kel"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">IPK Matkul</label>
                    <input type="text" name="ipk_matkul"  class="form-control"/>
                </div>                 
                            
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

      
            </div>