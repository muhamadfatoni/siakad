<div class="content-wrapper">
    <section class="content-header">
      <h1>
        form mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>
    <section class="content">
        <?php echo form_open_multipart('mahasiswa/create'); ?>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan">
             <option>Teknik Informatika</option>
             <option>Teknik Industri</option>
             <option>Teknik Mesin</option> 
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>No.Telepon</label>
            <input type="text" name="no_telp" class="form-control">
          </div>
          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          
        <?php echo form_close(); ?>
    </section>
</div>