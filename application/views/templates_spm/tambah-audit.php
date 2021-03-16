
<?php
$no =1;
?>
    <div class="modal-body">
          <form action="aksi_tambah_audit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 10px;"> 
                    <label for="Modal Name"> <?php echo $no++ ?> </label>
                    <input type="hidden" name="idauditor"  class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tahun Ajaran</label>
                  <select type="text" name="tahunAjaran"  class="form-control">
                  <option value="">--Pilih Tahun Ajaran--</option>
                  <option value="1">Tahun Ajaran 2018 - 2019</option>
                  <option value="2">Tahun Ajaran 2019 - 2020</option>
                  <option value="3">Tahun Ajaran 2020 - 2021</option>
                  <option value="4">Tahun Ajaran 2021 - 2022</option>
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Semester</label>
                  <select type="text" name="semester"  class="form-control">
                  <option value="">--Pilih Semester--</option>
                  <option value="1">Semester Ganjil</option>
                  <option value="2">Semster Genap</option>                  
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Auditor</label>
                  <select type="text" name="auditor"  class="form-control">
                  <option value="">--Pilih Auditor--</option>
                  <option value="1">Uung Ungkawa</option> 
                  <option value="2">Dewi Rosmala</option>                  
                  </select>
                </div>   

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Jenjang</label>
                  <select type="text" name="fakultas"  class="form-control">
                  <option value="">--Pilih Jenjang--</option>
                  <option value="1">S1 - Sarjana</option> 
                  <option value="2">S2 - Magister </option>                  
                  </select>
                </div>  


                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Fakultas</label>
                  <select type="text" name="fakultas"  class="form-control">
                  <option value="">--Pilih Fakultas--</option>
                  <option value="1">Fakultas Teknik Industri</option> <!-- munculkan sesuai jenjang --->
                  <option value="2">Fakultas Seni Rupdan dan Desain </option> <!-- munculkan sesuai jenjang --->                  
                  </select>
                </div>  

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Pilih Prodi (Auditee)</label>
                  <select type="text" name="prodi"  class="form-control">
                  <option value="">--Pilih Prodi--</option>
                  <option value="1">Pilih FTI munculin prodi FTI</option> <!-- munculkan sesuai jenjang & fakultas --->
                  <option value="2">Pilih FSRD munculin prodi Prodi </option> <!-- munculkan sesuai jenjang & fakultas --->                  
                  </select>
                </div>  

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Tanggal Visitasi</label>
                    <input type="date" name="tglVisitasi"  class="form-control"/>
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