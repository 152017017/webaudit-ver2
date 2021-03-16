    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9l</h3>                        
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

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tepat Waktu Awal, pilih Y apabila tepat waktu</label>
                  <select type="text" name="n_awal"  class="form-control">
                  <option value="">--Pilih Nilai--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
                </div>     

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tepat Waktu Tengah, pilih Y apabila tepat waktu</label>
                  <select type="text" name="n_tengah"  class="form-control">
                  <option value="">--Pilih Nilai--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
                </div>   

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tepat Waktu Akhir, pilih Y apabila tepat waktu</label>
                  <select type="text" name="n_akhir"  class="form-control">
                  <option value="">--Pilih Nilai--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
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