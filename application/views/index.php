<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css') ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/morris.js/morris.css') ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/jvectormap/jquery-jvectormap.css') ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SIM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM Banjar</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama') ?>
                  <small><?php echo $this->session->userdata('role') ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('User/logout') ?>" class="btn btn-default btn-block btn-flat ">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li class="" id='btn_dashboard'>
          <a href="<?php echo base_url('Dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="" id='btn_kelola_user'>
          <a href="<?php echo base_url('User/') ?>">
            <i class="fa fa-user"></i> <span>Kelola User</span>
          </a>
        </li>
        <li class="" id='btn_kelola_anggota_stt'>
          <a href="<?php echo base_url('Keanggotaan/') ?>">
            <i class="fa fa-address-book"></i>
            <span>Kelola Anggota STT</span>
          </a>
        </li>
        <li class="" id='btn_kelola_lomba'>
          <li>
            <a href="<?php echo base_url('Aktivitas/lomba') ?>">
              <i class="fa fa-flag-checkered"></i>
              <span>Kelola Kegiatan Lomba</span>
            </a>
          </li>
        </li>
        <li class="" id='btn_kelola_latihan'>
          <li>
            <a href="<?php echo base_url('Aktivitas/latihan') ?>">
              <i class="fa fa-calendar"></i>
              <span>Kelola Kegiatan Latihan</span>
            </a>
          </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php if ($this->session->flashdata('success')): ?>
        <div class="callout callout-success lead">
          <h4>Berhasil !</h4>
          <p><?php echo $this->session->flashdata('success')?></p>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('error')): ?>
        <div class="callout callout-success lead">
          <h4>Gagal !</h4>
          <p><?php echo $this->session->flashdata('error')?></p>
        </div>
      <?php endif; ?>
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $num_anggota ?></h3>

              <p>Anggota STT</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url('Keanggotaan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $num_lomba ?></h3>

              <p>Kegiatan Lomba</p>
            </div>
            <div class="icon">
              <i class="fa fa-flag-checkered"></i>
            </div>
            <a href="<?php echo base_url('Aktivitas/lomba') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $num_latihan ?></h3>

              <p>Kegiatan Latihan</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="<?php echo base_url('Aktivitas/latihan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

        <div class="">
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Timeline Kegiatan Sejak Tanggal <?php echo date('d M Y') ?></h3>
            </div>
            <div class="box-body">
              <div class="col-lg-6">
                <div class="">
                  <h3>
                    <b>Timeline Latihan</b>
                  </h3>
                  <br>
                </div>
                <?php foreach ($latihan as $key) { ?>
                  <ul class="timeline">
                    <li class="time-label">
                      <span class="bg-red">
                        <?php echo $key->waktu_pelaksanaan ?>
                      </span>
                    </li>
                    <li>
                      <i class="fa fa-times bg-blue"></i>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><?php echo $key->nama_aktivitas ?></h3>

                        <div class="timeline-body">
                          <?php echo $key->detail_aktivitas ?>
                        </div>

                        <div class="timeline-footer">
                          <a class="btn btn-success btn-xs" href="<?php echo base_url("Aktivitas/send_message/dash/".$key->id_aktivitas."")?>" title="Kirim Pesan" onclick="return confirm('Yakin ingin mengirim pesan?')"><i class="fa fa-paper-plane-o"></i> Kirim</a>
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data?')" href="<?php echo base_url("Aktivitas/delete_aktivitas/dash/".$key->id_aktivitas."")?>"><i class="fa fa-close"></i> Batalkan</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                <?php } ?>
              </div>
              <div class="col-lg-6">
                <div class="">
                  <h3>
                    <b>Timeline Lomba</b>
                  </h3>
                  <br>
                </div>
              <?php foreach ($lomba as $key) { ?>

                <ul class="timeline">
                  <li class="time-label">
                    <span class="bg-red">
                      <?php echo $key->waktu_pelaksanaan ?>
                    </span>
                  </li>
                  <li>
                    <i class="fa fa-times bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><?php echo $key->nama_aktivitas ?></h3>

                      <div class="timeline-body">
                        <?php echo $key->detail_aktivitas ?>
                      </div>

                      <div class="timeline-footer">
                        <a class="btn btn-success btn-xs" href="<?php echo base_url("Aktivitas/send_message/dash/".$key->id_aktivitas."")?>" title="Kirim Pesan" onclick="return confirm('Yakin ingin mengirim pesan?')"><i class="fa fa-paper-plane-o"></i> Kirim</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data?')" href="<?php echo base_url("Aktivitas/delete_aktivitas/dash/".$key->id_aktivitas."")?>"><i class="fa fa-close"></i> Batalkan</a>
                      </div>
                    </div>
                  </li>
                </ul>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>      
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('bower_components/raphael/raphael.min.js') ?>"></script>
<script src="<?php echo base_url('bower_components/morris.js/morris.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('bower_components/moment/min/moment.min.js') ?>"></script>
<script src="<?php echo base_url('bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js') ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
  $(document).ready(function() {
    $('#btn_dashboard').addClass('active');
    if ("<?php echo $this->session->userdata('id_role')?>"!="ADMIN") {
      $('#btn_kelola_user').hide();
    }
  });
</script>
</body>
</html>
