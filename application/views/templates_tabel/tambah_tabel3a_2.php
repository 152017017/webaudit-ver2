    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 3a - 2</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="namaDosen"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS yang Diakreditasi TS-2</label>
                    <input type="number" name="TS-2"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS yang Diakreditasi TS-1</label>
                    <input type="number" name="TS-1"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS yang Diakreditasi TS</label>
                    <input type="number" name="TS-2"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Rata Rata</label>
                    <input type="number" name="RataRata"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS Lain Pada program yang sama di PT TS-2</label>
                    <input type="number" name="PS_TS-2"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS Lain Pada program yang sama di PT TS-1</label>
                    <input type="number" name="PS_TS-1"  class="form-control"/>
                </div>       

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Mahasiswa yang Dibimbing Pada PS Lain Pada program yang sama di PT TS</label>
                    <input type="number" name="PS_TS"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Rata Rata</label>
                    <input type="number" name="PS_RataRata"  class="form-control"/>
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