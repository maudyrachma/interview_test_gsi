<?php
$assets  = $this->config->item('assets');
$path    = $this->config->item('path');
?>
<!DOCTYPE html>
<html><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo $assets;?>/dist/img/krm.png" type="image/gif" sizes="16x16">
  <title><?php echo $page; ?> | PT. Krama Yudha</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $assets;?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $assets;?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $assets;?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $assets;?>/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo $assets;?>/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $assets;?>/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo $assets;?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $assets;?>/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b>LT</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MONITORING</b>HELPDESK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <div class="custom-menu-navbar" id="main-nav">
        <ul class="nav navbar-menu-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bars"></i>
              <span>MAIN NAVIGATION</span>
            </a>
            <ul class="dropdown-menu sidebar-menu navbar-left" data-widget="tree">
              <!-- <li class="header">MAIN NAVIGATION</li> -->
              <li <?php echo ($page=='Dashboard')?'class="active"':'';?>>
                <a href="<?= site_url('dashboard') ?>">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li <?php echo ($page=='Register')?'class="active"':'';?>>
              <li>
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
                <li <?php echo ($page=='Kategori Masalahs')?'class="active"':'';?>>
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
          </li>
        </ul>
      </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $assets;?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['users_data']->nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $assets;?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <!-- <?php echo $_SESSION['users_data']->nama ." (". $_SESSION['users_data']->jabatan . ")"; ?> -->
                  <?php echo $_SESSION['users_data']->nama; ?> - <?php echo $_SESSION['users_data']->jabatan; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
