
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Muhammad Fatoni</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php $page = $this->uri->segment(1); ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="<?=$page==='dashboard'?"active":""?>">
          <a href="<?=base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> 
            Dashboard
          </a>
        </li>

        <!-- <li class="active treeview">
          <a href="<?= base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
         </a>  
        </li> -->

         <li class="<?=$page==='mahasiswa'?"active":""?>">
          <a href="<?=base_url('mahasiswa')?>">
            <i class="fa fa-graduation-cap"></i> 
            Mahasiswa
          </a>
        </li>
        
        <!-- <li class="active treeview">
          <a href="<?= base_url('mahasiswa')?>">
            <i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span> 
          </a>  
        </li> -->

        <!-- <li class="active treeview">
          <a href="<?= base_url('dosen')?>">
            <i class="fa fa-user"></i> <span>Dosen</span> 
         </a>  
        </li> -->

        <li class="<?=$page==='dosen'?"active":""?>">
          <a href="<?=base_url('dosen')?>">
            <i class="fa fa-user"></i> 
            Dosen
          </a>
        </li>

        <li class="active treeview">
          <a href="<?= base_url('jadwalkuliah')?>">
            <i class="fa fa-book"></i> <span>Jadwal Kuliah</span> 
         </a>  
        </li>

        <li class="<?=$page==='jurusan'?"active":""?>">
          <a href="<?=base_url('jurusan')?>">
            <i class="fa fa-university"></i> 
            Jurusan
          </a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span>Ganti Password</span> 
         </a>  
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-sign-out"></i> <span>Log Out</span> 
         </a>  
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  