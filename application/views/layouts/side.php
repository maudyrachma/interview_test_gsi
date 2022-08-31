<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo $assets;?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->

    <div class="sidebar-heading text-center border-bottom">
      <img src="<?php echo $assets;?>/dist/img/krm.png" style="width: 70px" class="pb-2">
      <a href="<?php echo base_url('dashboard');?>" class="text-dark">
        <h5>PT. KRAMA YUDHA RATU MOTOR</h5>
      </a>
    </div>

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li <?php echo ($page=='Dashboard')?'class="active"':'';?>>
        <a href="<?= site_url('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <!-- <li <?php echo ($page=='landing')?'class="active"':'';?>>
        <a href="<?= site_url('landing') ?>">
          <i class="fa fa-arrow-circle-down"></i> <span>Peta Landing</span>
        </a>
      </li> -->
      <li <?php echo ($page=='Register')?'class="active"':'';?>>
        <a href="<?= site_url('register') ?>">
          <i class="fa fa-user-plus"></i> <span>Register</span>
        </a>
      </li>
      <li <?php echo ($page=='Data Personel')?'class="active"':'';?>>
        <a href="<?= site_url('register/data_personel') ?>">
          <i class="fa fa-file"></i> <span>Data Personel</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Penugasan</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">2</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($page=='')?'class="active"':'';?>>
            <a href=""><i class="fa fa-circle-o"></i>Input</a>
          </li>
          <li <?php echo ($page=='')?'class="active"':'';?>>
            <a href=""><i class="fa fa-circle-o"></i>Ambil</a>
          </li>
        </ul>
        <li <?php echo ($page=='Part')?'class="active"':'';?>>
          <a href="<?= site_url('part') ?>">
            <i class="fa fa-th-large"></i>
            <span>Nama Part</span>
          </a>
        </li>
        <li <?php echo ($page=='Kategori Masalah')?'class="active"':'';?>>
          <a href="<?= site_url('kat_masalah') ?>">
            <i class="fa fa-exclamation-triangle"></i> 
            <span>Kategori Masalah</span>
          </a>
        </li>
        <li <?php echo ($page=='Laporan')?'class="active"':'';?>>
          <a href="<?= site_url('laporan') ?>">
            <i class="fa fa-clipboard"></i> 
            <span>Laporan</span>
          </a>
        </li>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
