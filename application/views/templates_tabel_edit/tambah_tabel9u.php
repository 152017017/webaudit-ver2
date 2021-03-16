    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9u</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Karya</label>
                    <input type="text" name="JenisDokumen"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Mendaftarkan Surat ke HaKI</label>
                    <input type="date" name="WaktuMendaftarkan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Mendapatkan Surat dari HaKI</label>
                    <input type="text" name="WaktuMendapatkan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tersedia</label>
                    <input type="date" name="Tersedia"  class="form-control"/>
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