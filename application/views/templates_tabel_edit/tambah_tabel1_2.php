    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 1-2</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Lembaga Mitra</label>
                    <input type="text" name="LembagaMitra"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tingkat</label>
                  <select type="text" name="tahunAjaran"  class="form-control"> 
                  <option value="">--Pilih Tingkat--</option>
                  <option value="1">Internatsional</option>
                  <option value="2">Nasional</option>
                  <option value="3">Wilayah</option>                  
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Judul Kegiatan</label>
                    <input type="text" name="JudulKegiatan"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Manfaat</label>
                    <input type="text" name="Manfaat"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu</label>
                    <input type="date" name="rencana"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bukti</label>
                    <input type="text" name="nilai"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tahun Berakhir</label>
                    <input type="date" name="kesimpulan" value="OTOMATIS muncul sesuai nilai, per butir beda2" class="form-control"/>
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