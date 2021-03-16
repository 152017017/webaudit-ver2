
    <div class="modal-body">
          <form action="aksi_tambah_audit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">ID Dosen</label>
                    <input type="text" name="idDosen" value="ambil dari db" class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="namaDosen" value="ambil dari db" class="form-control"/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">NIP</label>
                    <input type="text" name="nip" value="ambil dari db" class="form-control" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Status Dosen</label>
                  <select type="text" name="statuss"  class="form-control">
                  <option value="">--Pilih Status Dosen--</option>
                  <option value="1">Dosen</option>
                  <option value="2">Auditor</option>             
                  </select>
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