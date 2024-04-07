<div class="content-wrapper">
	<section class="content">
		<?php foreach($dosen as $dsn)  ?>
		<form action="<?php echo base_url().'dosen/edit?id='.$dsn->id; ?>" method="post">
			<div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="<?php echo $dsn->nip ?>">
          </div>
          <div class="form-group">
            <label>Nama Dosen</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $dsn->id ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $dsn->nama ?>">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $dsn->email ?>">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>			
		</form>
		<?php  ?>
	</section>
</div>
