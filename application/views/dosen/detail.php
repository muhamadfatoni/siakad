<div class="content-wrapper">
	<section class="content">
		<h5><strong>DETAIL DOSEN</strong></h5>
		
		<table class="table">
			<tr>
				<th>NIP</th>
				<td><?php echo $detail->nip ?></td>
			</tr>	
			<tr>
				<th>Nama</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $detail->email?></td>
			</tr>
		</table>
		<a href="<?php echo base_url('dosen/index'); ?>" class="btn btn-primary">Kembali</a>
	</section>
</div>
									