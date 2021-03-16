    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9b</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Program Studi</label>
                    <input type="text" name="Prodi"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nilai Rata - Rata Kepuasan Dosen</label>
                    <input type="text" name="NilaiRataRataDosen"  class="form-control"/>
                </div>             

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nilai Rata - Rata Kepuasan Tendik</label>
                    <input type="text" name="NilaiRataRataTendik"  class="form-control"/>
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