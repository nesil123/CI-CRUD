<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/all.min.css");?>">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/tempusdominus-bootstrap-4.min.css");?>">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/icheck-bootstrap.min.css");?>">
      <!-- JQVMap -->
      <link rel="stylesheet" href="<?= base_url("public/assets/plugins/jqvmap.min.css");?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/adminlte.min.css");?>">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/OverlayScrollbars.min.css");?>">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?= base_url("public/assets/plugins/daterangepicker.css");?>">
      <!-- summernote -->
      <link rel="stylesheet" href="<?= base_url("public/assets/plugins/summernote-bs4.min.css");?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Navbar Search -->
               <!-- Messages Dropdown Menu -->
               <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="" style="color: white;">
                  <img src="public/assets/img/user2-160x160.jpg" class="img-circle" style="width: 40px;">  Admin
                  </a>
                  <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                     <a href="#" class="dropdown-item">
                     <i class="fas fa- mr-2"></i>Settings
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="<?= base_url("");?>" class="dropdown-item">
                     <i class="fas fa-lock mr-2"></i> Logout
                     </a>
                  </div>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <div class="bg-primary">
               <a href="<?= base_url('dashboard');?>" class="brand-link">
               <img src="<?= base_url("public/assets/img/AdminLTELogo.png");?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light">SmartWebIn</span>
               </a>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="<?= base_url("public/assets/img/user2-160x160.jpg");?>" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="<?= base_url('dashboard');?>" class="d-block">Admin</a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-item menu-open">
                        <a href="<?= base_url('dashboard');?>" class="nav-link">
                           <i class="nav-icon fa-brands fa-microsoft"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                        <ul class="nav">
                           <li class="nav-item">
                              <a href="<?= base_url('item_list');?>" class="nav-link active">
                                 <i class="fa-solid fa-star nav-icon"></i>
                                 <p>Manage Slider</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="" class="nav-link">
                                 <i class="fa-solid fa-star nav-icon"></i>
                                 <p>Manage Products</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-cog"></i>
                           <p>Settings
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="pages/charts/flot.html" class="nav-link">
                                 <i class="fas fa-angle-left left"></i>
                                 <p> Manage Menu</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="pages/charts/inline.html" class="nav-link">
                                 <i class="fas fa-angle-left left"></i>
                                 <p>Reset Password</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="<?= base_url("");?>" class="nav-link">
                                 <i class="fas fa-angle-left left"></i>
                                 <p>Logout</p>
                              </a>
                           </li>
                        </ul>
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
                        <h1 class="m-0">Search results</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                           <li class="breadcrumb-item active">Help</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
                <div class="col-md-8 offset-md-2">
                    <form method="post">
                        <div class="input-group">
                            <input type="text" name="inputName" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" name="search" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="new-button">
               <button type="button" class="btn btn-danger"><i class='fas'>&#xf044;</i><a href="<?=base_url("cart/add_product");?>">New</a></button>
            </div>
            <div class="container-fluid mt-5">
               <div class="row">
                  <div class="col-md-12">
                     <?php
                      if(session()->getFlashdata('status'))
                      {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <strong>Hello</strong><?=(session()->getFlashdata('status')); ?>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                        <?php
                      }
                     ?>
                  
                     <div class="card">
                        <div class="card-header">
                           <h3 class="card-title">Search details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>Product Name</th>
                                    <th>MRP</th>
                                    <th>Discount</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                    if(isset($name))
                    {
                     foreach ($name as $n):
                        echo '<h1>'.$n['product_name'].'</h1>';
                     endforeach;
                    }
                    ?>
                           <h3>No Products</h3>
                           </tbody>
                           </table>
                        </div>
                        <!-- /.card-body -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://www.smartwebin.com/">SmartWebIn</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Designed & Developed by</b><a href="https://www.smartwebin.com/"> SmartWebIn</a>
            </div>
         </footer>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?= base_url("public/assets/plugins/jquery.min.js");?>"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="public/assets/plugins/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="<?= base_url("public/assets/plugins/bootstrap.bundle.min.js");?>"></script>
      <!-- ChartJS -->
      <script src="<?= base_url("public/assets/plugins/Chart.min.js");?>"></script>
      <!-- Sparkline -->
      <script src="<?= base_url("public/assets/plugins/sparkline.js");?>"></script>
      <!-- JQVMap -->
      <script src="<?= base_url("public/assets/plugins/jquery.vmap.min.js");?>"></script>
      <script src="<?= base_url("public/assets/plugins/jquery.vmap.usa.js");?>"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?= base_url("public/assets/plugins/jquery.knob.min.js");?>"></script>
      <!-- daterangepicker -->
      <script src="<?= base_url("public/assets/plugins/moment.min.js");?>"></script>
      <script src="<?= base_url("public/assets/plugins/daterangepicker.js");?>"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="<?= base_url("public/assets/plugins/tempusdominus-bootstrap-4.min.js");?>"></script>
      <!-- Summernote -->
      <script src="<?= base_url("public/assets/plugins/summernote-bs4.min.js");?>"></script>
      <!-- overlayScrollbars -->
      <script src="<?= base_url("public/assets/plugins/jquery.overlayScrollbars.min.js");?>"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url("public/assets/plugins/adminlte.js");?>"></script>
      <!-- AdminLTE for demo purposes -->
      <!-- <script src="plugins/demo.js"></script>
         --><!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <!-- <script src="plugins/dashboard.js"></script>
         -->
   </body>
</html>
