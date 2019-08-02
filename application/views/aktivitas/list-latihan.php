<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | List Kegiatan Latihan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css') ?>">
  <!-- Morris chart -->  

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
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="" id='btn_kelola_user'>
          <a href="<?php echo base_url('user/') ?>">
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
          <a href="<?php echo base_url('Aktivitas/lomba') ?>">
            <i class="fa fa-flag-checkered"></i>
            <span>Kelola Kegiatan Lomba</span>
          </a>
        </li>
        <li class="" id='btn_kelola_latihan'>
          <a href="<?php echo base_url('Aktivitas/latihan') ?>">
            <i class="fa fa-calendar"></i>
            <span>Kelola Kegiatan Latihan</span>
          </a>
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
        Kelola Kegiatan Latihan
        <button class="pull-right btn btn-success" type="button" name="btn_add_aktivitas" id='btn_add_aktivitas'><i class="fa fa-plus"></i>   Tambah Kegiatan Latihan</button>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Kegiatan Latihan</h3>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered table-hover" id='tb_list_kegiatan'>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Latihan</th>
                <th>Detail Latihan</th>
                <th>Tanggal Latihan</th>
                <th>Lokasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              <?php foreach ($data as $key) {?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td class="col-md-2"><?php echo $key->nama_aktivitas ?></td>
                  <td><?php echo $key->detail_aktivitas ?></td>
                  <td><?php echo $key->waktu_pelaksanaan ?></td>
                  <td><?php echo $key->tempat_pelaksanaan ?></td>
                  <td class="btn-group col-md-3">
                    <a href="javascript:void(0)" title="Edit kegiatan latihan" class="btn btn-warning" onclick="edit_aktivitas(<?php echo $key->id_aktivitas ?>)"><i class="fa fa-pencil"></i>  Edit</a>
                    <a href="<?php echo base_url("Aktivitas/delete_aktivitas/LAT/".$key->id_aktivitas."")?>" title="Hapus kegiatan" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>   Hapus</a>
                    <a href="<?php echo base_url("Aktivitas/send_message/LAT/".$key->id_aktivitas."")?>" title="Kirim Pesan" onclick="return confirm('Yakin ingin mengirim pesan?')" class="btn btn-success"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>   Kirim</a>
                  </td>
                </tr>
                <?php $no++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal_add_aktivitas" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="background-color: #367fa9;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 id="header" class="modal-title" style="color:white"><i class="fa fa-plus"></i>    Tambah Kegiatan Latihan</h4>
          </div>

          <!--Body-->
          <div class="modal-body">
            <form id="" class="" action="<?php echo base_url('Aktivitas/add_aktivitas/LAT') ?>" method="post">
              <div class="form-group">
                <label for="nama_aktivitas">Nama Kegiatan Latihan</label>
                <input type="text" class="form-control" name="nama_aktivitas" placeholder="Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="detail_aktivitas">Detail Latihan</label>
                <textarea class="form-control" name="detail_aktivitas" placeholder="Detail" required></textarea>
              </div>
              <div class="form-group">
                <label for="waktu_pelaksanaan">Waktu Pelaksanaan</label>
                <input name='waktu_pelaksanaan' type="date" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="tempat_pelaksanaan">Lokasi</label>
                <input type="text" class="form-control" name="tempat_pelaksanaan" placeholder="Lokasi kegiatan" required>
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="button"><i class="fa fa-paper-plane-o"></i>   Kirim</button>
            </form>
          </div>
          <!--Footer-->
        </div>
        <!--/.Content-->
      </div>
    </div>

    <div class="modal fade" id="modal_edit_aktivitas" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="background-color: #367fa9;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 id="header" class="modal-title" style="color:white"><i class="fa fa-pencil"></i>    Edit Kegiatan Latihan</h4>
          </div>

          <!--Body-->
          <div class="modal-body">
            <form id="" class="" action="<?php echo base_url('Aktivitas/update_aktivitas/LAT') ?>" method="post">
              <input type="hidden" class="form-control" name="id_aktivitas" id='edit_id_aktivitas' value='' required>
              <div class="form-group">
                <label for="nama_aktivitas">Nama Kegiatan Latihan</label>
                <input type="text" class="form-control" name="nama_aktivitas" id='edit_nama_aktivitas' placeholder="Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="detail_aktivitas">Detail Latihan</label>
                <textarea class="form-control" name="detail_aktivitas" id='edit_detail_aktivitas' placeholder="Detail" required></textarea>
              </div>
              <div class="form-group">
                <label for="waktu_pelaksanaan">Waktu Pelaksanaan</label>
                <input name='waktu_pelaksanaan' id='edit_waktu_pelaksanaan' type="date" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="tempat_pelaksanaan">Lokasi</label>
                <input type="text" class="form-control" id="edit_tempat_pelaksanaan" name="tempat_pelaksanaan" placeholder="Lokasi kegiatan" required>
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
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js') ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<script>
  $(document).ready(function() {
    $('#btn_kelola_latihan').addClass('active');
    $('#tb_list_kegiatan').DataTable();
    if ("<?php echo $this->session->userdata('id_role')?>"!="ADMIN") {
      $('#btn_kelola_user').hide();
    }
  });

  $('#btn_add_aktivitas').click(function() {
    $('#modal_add_aktivitas').modal('show');
  });

  function edit_aktivitas(id_aktivitas){
    $.ajax({
      url: '<?php echo base_url('Aktivitas/ajax_get_aktivitas') ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {
        id_aktivitas: id_aktivitas
      },
      success:function(data){
        console.log(data);
        $('#edit_id_aktivitas').val(data.id_aktivitas);
        $('#edit_nama_aktivitas').val(data.nama_aktivitas);
        $('#edit_detail_aktivitas').val(data.detail_aktivitas);
        $('#edit_waktu_pelaksanaan').val(data.waktu_pelaksanaan);
        $('#edit_tempat_pelaksanaan').val(data.tempat_pelaksanaan);
      },
      error:function(){
        alert('error get anggota');
      }
    });
    $('#modal_edit_aktivitas').modal('show');
  }
</script>
</body>
</html>
