 <!-- Nav Item - User Information -->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('index.php/auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
 </div>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -------------------------->
<div class="modal-body">
    <h3 class="h3 mb-0 text-gray-800">Tabel Dosen Admin</h3>                        
                    <div class="card-body">
                            <div>
						    <button class="btn btn-sm btn-outline-primary mb-3" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add Dosen</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr rowspan="2">
                                            <th style="text-align:center">No</th>
                                            <th style="text-align:center">Nama Dosen</th>
                                            <th style="text-align:center">NIM</th>
                                            <th style="text-align:center">Jabatan* <p> *1) Non-audit *2) Audit </p></th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Edit</th>	
                                            <th style="text-align:center">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
											<?php $no=1;
											foreach($user as $us) : ?>
										<tr>
											<td ><?php echo $no++ ?></td>
											<td><?php echo $us->nama ?></td>
											<td><?php echo $us->nim ?></td>
                                            <td style="text-align:center"><?php echo $us->jabatan ?></td>
											<td><?php echo $us->status ?></td>
											<td style="text-align:center"><?php echo anchor('admin/table_manage/edit/' .$us->id,'<div class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
											<td style="text-align:center"><?php echo anchor('admin/table_manage/delete/' .$us->id,'<div class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
										</tr>
											<?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
</div>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -------------------------->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'index.php/admin/table_manage/add'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control">
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control">
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                <option>Sayuran</option>
                <option>Buah</option>
                <option>Sembako</option>
                <option>Daging dan Ikan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Upload Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div> -->

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
