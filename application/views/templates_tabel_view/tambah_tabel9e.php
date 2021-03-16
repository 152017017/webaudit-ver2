    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9e</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nomor Karyawan</label>
                    <input type="number" name="noKaryawan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Karyawan</label>
                    <input type="text" name="NamaKaryawan"  class="form-control"/>
                </div>             

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nilai Kinerja Semester Ganjil, pilih YA apabila nilai >90%</label>
                  <select type="text" name="NilaiKinerjaSemsGanjil"  class="form-control">
                  <option value="">--Pilih Nilai Kinerja--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nilai Kinerja Semester Genap, pilih YA apabila nilai >90%</label>
                  <select type="text" name="NilaiKinerjaSemsGenap"  class="form-control">
                  <option value="">--Pilih Nilai Kinerja--</option>
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