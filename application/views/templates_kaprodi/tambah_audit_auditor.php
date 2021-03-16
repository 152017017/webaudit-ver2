    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan data audit</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Capaian</label>
                    <input type="text" name="capaian"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Target</label>
                    <input type="text" name="target"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Pelaksanaan Kegiatan Tindak Lanjut Program Studi</label>
                    <input type="text" name="pelaksanaan"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Permasalahan yang Dihadapi pada Tahun</label>
                    <input type="text" name="permasalahan"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Rencana  Kegiatan Tindak Lanjut Program Studi</label>
                    <input type="text" name="rencana"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nilai</label>
                    <input type="text" name="nilai"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kesimpulan</label>
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