    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 8d1 - D4</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tahun Lulus</label>
                    <input type="text" name="TahunLulus"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Lulus</label>
                    <input type="number" name="JumlahLulus"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa Lulusan yang Terlacak</label>
                    <input type="number" name="JumlahLulusTerlacak"  class="form-control"/>
                </div>                                   

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Lulusan Terlacak dengan Waktu Tunggu < 3 Bulan</label>
                    <input type="number" name="<3bulan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Lulusan Terlacak dengan Waktu Tunggu 3 ≤ WT ≤ 6 bulan</label>
                    <input type="number" name="3-6bulan"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Tunggu > 6 bulan</label>
                    <input type="number" name=">6bulan"  class="form-control"/>
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