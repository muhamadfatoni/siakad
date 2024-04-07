<div class="content-wrapper">
    <section class="content-header">
      <h1>
        form dosen
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data dosen</li>
      </ol>
    </section>
    <section class="content">
        <form method="post" action="<?php echo base_url().'dosen/tambah'; ?>">
          <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </section>
</div>