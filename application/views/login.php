<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | Sign In</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>SIM STT</b>
    </div>
    <?php if ($this->session->flashdata('error')): ?>
      <div class="callout callout-danger lead">
        <h4>Gagal Sign In !</h4>
        <p><?php echo $this->session->flashdata('error')?></p>
      </div>
    <?php endif; ?>
    <!-- /.login-logo -->
    <div class="login-box-body">


      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url('User/login') ?>" method="post">
        <div class="form-group has-feedback">
          <label for="username">Username</label>
          <input name="username" class="form-control" placeholder="username" type="text" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <label for="password">Password</label>
          <input name="password" class="form-control" placeholder="Password" type="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
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
</body>
</html>
