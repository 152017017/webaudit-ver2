    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 2-a</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tahun Akademik</label>
                    <input type="text" name="TahunAkademik"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Daya Tampung</label>
                    <input type="text" name="DayaTampung"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Calon Mahasiswa Pendaftar</label>
                    <input type="number" name="Pendaftaran"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Calon Mahasiswa Lulus Seleksi</label>
                    <input type="number" name="LulusSeleksi"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa Baru Reguler</label>
                    <input type="number" name="RegulerMaba"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa Baru Transfer</label>
                    <input type="number" name="TransferMaba"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa Aktif Reguler</label>
                    <input type="number" name="RegulerAktif"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa Aktif Transfer</label>
                    <input type="number" name="TransferAktif"  class="form-control"/>
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