
<?php
$no =1;
?>
    <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">

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
                  <label for="Modal Name">Auditee</label>
                  <select type="text" name="audite"  class="form-control">
                  <option value="">--Pilih Auditee--</option>
                  <option value="1">EDSM</option> 
                  <option value="2">BKU</option>                  
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