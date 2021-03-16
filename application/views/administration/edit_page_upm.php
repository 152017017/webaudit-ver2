<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT - USER</h3>

    <?php foreach($user as $us) :?>
		<form action="<?php echo base_url('index.php/admin/table_manage/update_upm') ?>" method="post" enctype="multipart/form-data">
            
            <div class="for-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $us->nama ?>">
            </div>

            <div class="for-group">
                <label>NIP</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $us->nim ?>">
            </div>

            <div class="for-group">
                <label>Status</label>
                <input type="text" name="role"  class="form-control" value="<?php echo $us->statuss ?>">
				<input type="hidden" name="id"  class="form-control" value="<?php echo $us->id ?>">
            </div>

            <button type="submit" class="btn btn-primary mt-3"> SAVE </button>
        
        </form>
    <?php endforeach; ?>
</div>
