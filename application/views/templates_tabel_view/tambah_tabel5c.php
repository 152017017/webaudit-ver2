    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 5c</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Aspek yang Diukur</label>
                    <input type="text" name="aspek"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tingkat Kepuasan Mahasiswa Sangat Baik (%)</label>
                    <input type="text" name="tingkat_SB"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tingkat Kepuasan Mahasiswa Baik (%)</label>
                    <input type="text" name="tingkat_B"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tingkat Kepuasan Mahasiswa Cukup (%)</label>
                    <input type="text" name="tingkat_C"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tingkat Kepuasan Mahasiswa Kurang (%)</label>
                    <input type="text" name="tingkat_K"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Rencana Tindak Lanjut oleh UPPS</label>
                    <input type="text" name="rencana"  class="form-control"/>
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