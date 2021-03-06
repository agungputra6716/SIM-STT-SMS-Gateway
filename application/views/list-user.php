<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | List Anggota</title>
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
          <a href="<?php echo base_url('keanggotaan/') ?>">
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
      <h1>
        Kelola User
        <button class="pull-right btn btn-success" type="button" name="btn_add_user" id='btn_add_user'><i class="fa fa-plus"></i>   Tambah User</button>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List User</h3>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered table-hover" id='tb_list_user'>
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              <?php foreach ($data as $key) {?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $key->username ?></td>
                  <td><?php echo $key->nama ?></td>
                  <td><?php echo $key->jenis_kelamin ?></td>
                  <td><?php echo $key->role ?></td>
                  <td class="btn-group">
                    <a href="javascript:void(0)" title="Edit user" class="btn btn-warning" onclick="edit_user('<?php echo $key->username ?>')"><i class="fa fa-pencil"></i>  Edit</a>
                    <a href="<?php echo base_url("User/delete_user/".$key->username."")?>" title="Hapus user" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>   Hapus</a>
                  </td>
                </tr>
                <?php $no++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal_add_user" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="background-color: #367fa9;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 id="header" class="modal-title" style="color:white"><i class="fa fa-plus"></i>    Tambah User</h4>
          </div>

          <!--Body-->
          <div class="modal-body">
            <form id="" class="" action="<?php echo base_url('User/add_user') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="username">Username baru</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="rpt_password">Ulangi Password</label>
                <input type="password" name="rpt_password" class="form-control" id="password" placeholder="Repeat Password">
              </div>
              <div class="form-group">
                <label for="nama">Nama User</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required>
                  <option value="">Pilih Jenis Kelamin</option>
                  <?php foreach ($jenis_kelamin as $key) { ?>
                    <option value="<?php echo $key->id_jenis_kelamin ?>"><?php echo $key->jenis_kelamin ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role" required>
                  <option value="">Pilih Role</option>
                  <?php foreach ($role as $key) { ?>
                    <option value="<?php echo $key->id_role ?>"><?php echo $key->role ?></option>
                  <?php } ?>
                </select>
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="button"><i class="fa fa-paper-plane-o"></i>   Kirim</button>
            </form>
          </div>
          <!--Footer-->
        </div>
        <!--/.Content-->
      </div>
    </div>

    <div class="modal fade" id="modal_edit_user" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="background-color: #367fa9;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 id="header" class="modal-title" style="color:white"><i class="fa fa-pencil"></i>    Edit User</h4>
          </div>

          <!--Body-->
          <div class="modal-body">
            <form id="" class="" action="<?php echo base_url('User/update_user') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="id_user" id='edit_id_user' value='' required>
              <div class="form-group">
                <label for="nama">Username</label>
                <input type="text" class="form-control" name="username" placeholder="username" id='edit_username' required readonly>
              </div>
              <div class="form-group">
                <label for="nama">Nama User</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" id='edit_nama' required>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id='edit_jenis_kelamin' required>
                  <option value="">Pilih Jenis Kelamin</option>
                  <?php foreach ($jenis_kelamin as $key) { ?>
                    <option value="<?php echo $key->id_jenis_kelamin ?>"><?php echo $key->jenis_kelamin ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role" id='edit_role' required>
                  <option value="">Pilih Role</option>
                  <?php foreach ($role as $key) { ?>
                    <option value="<?php echo $key->id_role ?>"><?php echo $key->role ?></option>
                  <?php } ?>
                </select>
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="button"><i class="fa fa-paper-plane-o"></i>   Kirim</button>
            </form>
          </div>
          <!--Footer-->
        </div>
        <!--/.Content-->
      </div>
    </div>

  </div>
  <!-- /.content-wrapper -->
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
    $('#btn_kelola_user').addClass('active');
    $('#tb_list_user').DataTable();
    if ("<?php echo $this->session->userdata('id_role')?>"!="ADMIN") {
      $('#btn_kelola_user').hide();
    }
  });

  $('#btn_add_user').click(function() {
    $('#modal_add_user').modal('show');
  });

  function edit_user(username){
    $.ajax({
      url: '<?php echo base_url('User/ajax_get_user') ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {
        username: username
      },
      success:function(data){
        console.log(data);
        $('#edit_username').val(data.username);
        $('#edit_nama').val(data.nama);
        $('#edit_jenis_kelamin').val(data.id_jenis_kelamin);
        $('#edit_role').val(data.id_role);
      },
      error:function(){
        alert('error get anggota');
      }
    });
    $('#modal_edit_user').modal('show');
  }
</script>
</body>
</html>
