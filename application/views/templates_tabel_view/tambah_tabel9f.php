    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9f</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Laboratorium</label>
                    <input type="text" name="JenisDokumen"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tersertifikasi/tidak, pilih Y apabila tersertifikasi</label>
                  <select type="text" name="Tersertifikasi"  class="form-control">
                  <option value="">--Pilih Nilai Kinerja--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nilai Pelayanan, pilih Y apabila terdapat data</label>
                  <select type="text" name="NilaiPelayanan"  class="form-control">
                  <option value="">--Pilih Nilai Pelayanan--</option>
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