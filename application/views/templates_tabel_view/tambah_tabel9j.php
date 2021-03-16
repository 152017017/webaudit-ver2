    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 9j</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kode Matakuliah</label>
                    <input type="text" name="kode_matkul"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Matakuliah</label>
                    <input type="text" name="nama_matkul"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kelas</label>
                    <input type="text" name="kelas"  class="form-control"/>
                </div> 

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Kesesuaian Pelaksanaan Perkuliahan sesuai RPS, pilih Y apabila sesuai</label>
                  <select type="text" name="kesesuaian"  class="form-control">
                  <option value="">--Pilih Nilai--</option>
                  <option value="1">Y</option> 
                  <option value="2">N</option>                  
                  </select>
                </div>     

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Berita Acara Pengembalian Tugas</label>
                    <input type="text" name="bacara_kuis"  class="form-control"/>
                </div>     

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Berita Acara Pengembalian UTS/UAS</label>
                    <input type="text" name="bacara_uas"  class="form-control"/>
                </div>     

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Solusi UTS</label>
                    <input type="text" name="solusi_uts"  class="form-control"/>
                </div>                 

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Solusi UAS</label>
                    <input type="text" name="solusi_uas"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Jumlah Komponen Penilaian</label>
                    <input type="text" name="komp_nilai"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Pemasukkan Nilai UTS</label>
                    <input type="text" name="waktu_uts"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Waktu Pemasukkan nilai UAS</label>
                    <input type="text" name="waktu_uas"  class="form-control"/>
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