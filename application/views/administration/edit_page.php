<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit</h3>

    <?php foreach($user as $us) :?>
		<form action="<?php echo base_url('index.php/admin/table_manage/update') ?>" method="post" enctype="multipart/form-data">
            
            <div class="for-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $us->nama ?>">
            </div>

            <div class="for-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $us->nim ?>">
            </div>

            <div class="for-group">
                <label>Jabatan</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $us->jabatan ?>">
            </div>


            <div class="for-group">
                <label>Status</label>
                <input type="text" name="role"  class="form-control" value="<?php echo $us->status ?>">
				<input type="hidden" name="id"  class="form-control" value="<?php echo $us->id ?>">
            </div>

            <button type="submit" class="btn btn-primary mt-3"> Save </button>
            <!-- <button type="" class="btn btn-success mt-3"> BACK </button> -->
			<button onclick="history.go(-1);" class="btn btn-success mt-3">Back </button>
        
        </form>
    <?php endforeach; ?>
</div>
