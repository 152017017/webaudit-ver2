    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 3a - 5</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="namaDosen"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">NIDN/NIDK</label>
                    <input type="number" name="NIDN"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Perusahaan Industri</label>
                    <input type="text" name="perusahaan"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Pendidikan Tertinggi</label>
                    <input type="text" name="pendidikan"  class="form-control"/>
                </div>   

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bidang Keahlian</label>
                    <input type="text" name="bidang"  class="form-control"/>
                </div>   

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Sertifikat Profesi Kompretensi</label>
                    <input type="text" name="sertifikat"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Mata Kuliah</label>
                    <input type="text" name="matakuliah"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bobot Kredit</label>
                    <input type="text" name="bobot"  class="form-control"/>
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