<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Jurusan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">jurusan</li>
      </ol>
    </section>
    <section class="content">
    	<table class="table table-hovered">
			<thead>
				<tr>
					<th>No</th>
					<th>nama_jurusan</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($jurusans as $key => $jurusan) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $jurusan->nama_jurusan ?></td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</section>
</div>
