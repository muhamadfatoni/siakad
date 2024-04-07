<?php 
// foreach ($mahasiswas as $key => $mahasiswa) {
//  	print_r($mahasiswa);
//  	echo '<hr>';
// } 
?>

	<div class="content-wrapper">
	    <section class="content-header">
	      <h1>
	        Data Mahasiswa
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Data Mahasiswa</li>
	      </ol>
	    </section>
	    <section class="content">
	    <p>
	    	<?php echo anchor ('mahasiswa/create/', '<div class="btn btn-default btn-sm"><i class="fa fa-plus"></i> TAMBAH MAHASISWA</div>') ?>
	    

	    <a class="btn btn-danger btn-sm" href=" <?php echo base_url('mahasiswa/print') ?>"> <i class="fa fa-print"> </i>PRINT</a>

	    <a class="btn btn-warning btn-sm" href=" <?php echo base_url('mahasiswa/pdf') ?>"> <i class="fa fa-file"> </i>EXPORT PDF</a>

	    <a class="btn btn-warning btn-sm" href=" <?php echo base_url('mahasiswa/excel') ?>"> <i class="fa fa-file"> </i>EXPORT EXCEL</a>

	    <div class="navbar-form navbar-right">
	    	<?php echo form_open('mahasiswa/search') ?>
	    	<input type="text" name="keyword" class="form-control" placeholder="search">
	    	<button type="submit" class="btn btn-success">Cari</button>
	    	<?php echo form_close() ?>
	    </div>

	    </p>

	    

			<table class="table table-hovered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Tanggal Lahir</th>
						<th>Jurusan</th>
						<th></th>

					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach ($mahasiswas as $key => $mahasiswa) { ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $mahasiswa->nama ?></td>
						<td><?= $mahasiswa->nim ?></td>
						<td><?= $mahasiswa->tgl_lahir ?></td>
						<td><?= $mahasiswa->jurusan ?></td>
						<td>
							<?php echo anchor ('mahasiswa/detail/'.$mahasiswa->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
						</td>
			          	<td onclick="javascript: return confirm('Apakah Anda yakin menghapus data tersebut ?')">
			          		<?php echo anchor ('mahasiswa/hapus/'.$mahasiswa->id, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>') ?>
			          	</td>
			          	<td>
			          		<?php echo anchor ('mahasiswa/update/'.$mahasiswa->id, '<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>') ?>
			          	</td>
					</tr>
					<?php $no++; } ?>
					
				</tbody>
			</table>
		</section>
	</div>