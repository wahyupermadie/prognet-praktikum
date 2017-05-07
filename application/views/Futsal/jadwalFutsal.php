<!DOCTYPE html>
<?php $logo_futsal = $this->session->userdata('logo_futsal'); ?>
<?php $nama_futsal = $this->session->userdata('nama_futsal'); ?>
<?php $id   = $this->session->userdata('id_futsal'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>FT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prognet</b>FUTSAL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <img src="<?php echo base_url(); ?>images/futsal/<?php echo $logo_futsal; ?>" class="user-image" alt="User Image">
               <span class="hidden-xs"><?php echo $nama_futsal; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>images/futsal/<?php echo $logo_futsal; ?>" class="user-circle" alt="User Image">

                <p>
                  <?php echo $nama_futsal; ?>
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src="<?php echo base_url(); ?>images/futsal/<?php echo $logo_futsal; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama_futsal; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        JADWAL FUTSAL
        <small>Prognet Futsal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a data-toggle="modal" title="Add this item" class="open-AddBookDialog btn btn-primary" data-target=".add-modal">Tambah Barang</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <tr>
                  <th>No</th>
                  <th>Tanggal Jadwal</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Harga</th>
                  <th>Lapangan</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    foreach ($jadwal as $value) {
                      $id=$value->id_det_jadwal;
                      $jam_mulai=$value->jam_mulai;
                      $jam_akhir=$value->jam_akhir;
                      $nama_lapangan = $value->nama_lapangan;
                      $tanggal = $value->tanggal_jadwal;    
                      $harga = $value->harga_sewa;
                      $status = $value->status;                       
                ?>
                
                
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $tanggal ?></td>
                  <td><?php echo $jam_mulai ?></td>
                  <td><?php echo $jam_akhir ?></td>
                  <td><?php echo $harga ?></td>
                  <td><?php echo $nama_lapangan ?></td>
                  <td><?php echo $status ?></td>
                  <td width="10%">
                 <button class="edit btn btn-success" data-toggle="modal" data-id="" data-nama="" data-gambar="<?php echo base_url(); ?>images/futsal/lapangan/" data-target=".edit-modal"><span class="glyphicon glyphicon-pencil"></span></button>
                  <a href="<?php echo base_url() ?>deletelapangan?id=<?php echo $id ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Barang Ini? hehe')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
                </tr>
              
              <?php
                $i++;}
              ?>
              <?php  
                  echo $this->pagination->create_links();
              ?>

              </table>
              <div class="modal fade add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>insertjadwal">
                      <div class="form-group">
                          <label class="sr-only">Date</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" name="tanggaljadwal" class="form-control pull-right" id="tanggaljadwal">
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="Kota">Jadwal</label>             
                                  <select id="idjadwal" name="idjadwal" class="form-control">
                                    <option>
                                       Pilih Jadwal
                                        </option>
                                          <?php
                                             foreach($jadwal as $valuex){
                                               $id=$valuex->id_jadwal;
                                               $jam_mulai=$valuex->jam_mulai;
                                               $jam_akhir=$valuex->jam_akhir;
                                          ?>
                                               <option value="<?php echo $id;?>"> 
                                                  <?php echo $jam_mulai;?> <?php echo "-"?>
                                                  <?php echo $jam_akhir;?>    
                                               </option>
                                                <?php
                                            }
                                                ?>
                                   </select>              
                           </div>
                          <div class="form-group">
                              <label class="sr-only" for="Kota">Lapangan</label>             
                                  <select id="idlapangan" name="idlapangan" class="form-control">
                                    <option>
                                       Pilih Lapangan
                                        </option>
                                          <?php
                                             foreach($lapangan as $valuex){
                                               $id=$valuex->id_lapangan;
                                               $nama=$valuex->nama_lapangan; 
                                          ?>
                                               <option value="<?php echo $id;?>"> 
                                                  <?php echo $nama;?>
                                               </option>
                                                <?php
                                            }
                                                ?>
                                   </select>              
                           </div>
                          <div class="form-group">
                          <label class="sr-only" for="hargasewa">Harga Sewa</label>
                          <input type="text" id="hargasewa" class="form-control" name="hargasewa" placeholder="Harga Sewa" required="required">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                    </form> 
                  </div>
                  
              </div>
            </div>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/Futsal/FutsalLTE/dist/js/demo.js"></script>
<!-- page script -->
</body>
</html>
