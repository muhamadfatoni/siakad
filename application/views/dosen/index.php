<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Dosen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Dosen</li>
      </ol>
      <p>
    	<?php echo anchor ('dosen/tambah/', '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus">Tambah Dosen</i></div>') ?>
    	</p>
    </section>
    <section class="content">
    	<form method="post" action="<?php echo base_url().'mahasiswa/create'; ?>">
					<table class="table table-hovered">
						<thead>
							<tr>
								<th>No</th>
								<th>nip</th>
								<th>nama dosen</th>
								<th>email</th>
								<th colspan="2">PERUBAHAN</th>
							</tr>
						</thead>
						
						<?php 
		        $no  = 1;
		        foreach ($listdosen as $dosen): ?>

		        <tr>
		          <td><?php echo $no++ ?></td>
		          <td><?php echo $dosen->nip ?></td>
		          <td><?php echo $dosen->nama ?></td>
		          <td><?php echo $dosen->email ?></td>
		          <td>
		          	<?php echo anchor ('dosen/detail/'.$dosen->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
		          </td>
		          <td onclick="javascript: return confirm('Apakah Anda yakin menghapus data tersebut ?')">
		          	<?php echo anchor ('dosen/hapus/', '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>') ?>
		          </td>
		          <td>
		          	<?php echo anchor ('dosen/edit/'.$dosen ->id, '<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>') ?>
		          </td>
		        </tr>
		          		
		      <?php endforeach; ?>
					</table>
			</form>
		</section>
</div>
