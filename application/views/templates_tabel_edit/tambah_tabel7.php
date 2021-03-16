    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 7</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="NamaDosen"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tema PKM Sesuai Roadmap</label>
                    <input type="text" name="TemaPKM"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Mahasiswa</label>
                    <input type="text" name="NamaMahasiswa"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Judul Kegiatan</label>
                    <input type="text" name="JudulKegiatan"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tahun</label>
                    <input type="date" name="Tahun"  class="form-control"/>
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