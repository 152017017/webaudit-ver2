    

    <div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Masukkan Data Tabel 5a</h3>                        
          <form action="aksi_tambah_audit_auditor.php" name="modal_popup" enctype="multipart/form-data" method="POST">                                     
            <!--- aks9_tambah_audit_auditor.php buat masukin data ke database -->

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Semester</label>
                    <input type="number" name="semester"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kode Matakuliah</label>
                    <input type="text" name="kode_matkul"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul"  class="form-control"/>
                </div>                

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Mata Kuliah Kompetensi</label>
                    <input type="text" name="komp_matkul"  class="form-control"/>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bobot Kredit Kuliah/ Responsi/ Tutorial</label>
                    <input type="number" name="bobot_kul"  class="form-control"/>
                </div>  
                
                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bobot Kredit Seminar</label>
                    <input type="number" name="bobot_sem"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Bobot Kredit Praktikum / Praktik lapangan</label>
                    <input type="number" name="bobot_prak"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Konversi Kredit ke Jam</label>
                    <input type="number" name="konversi"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Capaian Pembelajaran Sikap</label>
                    <input type="number" name="nilai_sikap"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Capaian Pembelajaran Pengetahuan</label>
                    <input type="number" name="nilai_peng"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Capaian Pembelajaran Keterampilan Umum</label>
                    <input type="number" name="nilai_umum"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Capaian Pembelajaran Keterampilan Khusus</label>
                    <input type="number" name="nilai_khusus"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Dokumen Rencana Pembelajaran</label>
                    <input type="number" name="dok_pem"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Unit Penyelenggara</label>
                    <input type="number" name="unit"  class="form-control"/>
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