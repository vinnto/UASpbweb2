<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() . "asset_back/plugins/fontawesome-free/css/all.min.css" ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . "asset_back/dist/css/adminlte.min.css" ?>">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url("admin"); ?>" class="brand-link">
        <img src="<?php echo base_url() . "asset_back/dist/img/UINMYBSK2.png" ?>" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">SisfoCV</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() . "asset_back/dist/img/user2-160x160.jpg" ?>" class="img-circle elevation-2"
              alt="User Image">

          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $this->session->userdata("nama"); ?>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url('about'); ?>" class="nav-link active">
                <i class="nav-icon far fa-user"></i>
                <p>
                  About
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('organisasi'); ?>" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                  Organisasii
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('project'); ?>" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                  Project
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("login/logout"); ?>" class="nav-link">
                <i class="nav-icon fas fa-ban"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Organisasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url("admin"); ?>">Home</a></li>
                <li class="breadcrumb-item active">Organisasi</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Organisasi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo base_url("organisasi/insert"); ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama_organisasi">Nama Organisasi</label>
                      <input type="text" class="form-control" name="nama_organisasi" placeholder="Masukkan Nama Organisasi">
                    </div>
                    <div class="form-group">
                      <label for="tahun_organisasi">Tahun Organisasi</label>
                      <input type="text" class="form-control" name="tahun_organisasi" placeholder="Masukkan Tahun Organisasi">
                    </div>
                    <div class="form-group">
                      <label for="jabatan_organisasi">Jabatan Organisasi</label>
                      <input type="text" class="form-control" name="jabatan_organisasi" placeholder="Masukkan Jabatan Organisasi">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="<?php echo base_url("organisasi"); ?>" class="btn btn-danger btn-sm" style="float: right">Back</a>

                  </div>
                </form>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="<?php echo base_url("admin"); ?>">SisfoCV</a></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url("asset_back/plugins/"); ?>jquery/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="<?php echo base_url() . "asset_back/plugins/bootstrap/js/bootstrap.bundle.min.js" ?>"></script>
  <!-- AdminLTE -->
  <script src="<?php echo base_url() . "asset_back/dist/js/adminlte.js" ?>"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="<?php echo base_url() . "asset_back/plugins/chart.js/Chart.min.js" ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . "asset_back/dist/js/demo.js" ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . "asset_back/dist/js/pages/dashboard3.js" ?>"></script>
</body>

</html>