    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 8b - 2</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Kegiatan</label>
                    <input type="text" name="NamaKegiatan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Perolehan</label>
                    <input type="date" name="WaktuPerolehan"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 20px;">
                            <label for="Modal Name"> Tingkat</label>
                            <select type="text" name="Tingkat"  class="form-control">
                            <option value="">--Pilih Tingkat--</option>
                            <option value="1">Internasional</option>
                            <option value="2">Nasional</option>                  
                            <option value="3">Wilayah</option>                  
                            </select>
                        </div>
               

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Prestasi yang Dicapai</label>
                    <input type="text" name="Prestasi"  class="form-control"/>
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