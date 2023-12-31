<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Log in</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/all.min.css"); ?>">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/icheck-bootstrap.min.css");?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?= base_url("public/assets/css/adminlte.min.css");?>">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href=""><b>Log</b>In</a>
         </div>
         <!-- /.login-logo -->
         <?php if(isset($validation)):?>
               <?= $validation->listErrors()?>
         <?php endif; ?>
         <?php 
          if(session()->getFlashdata('error')):
         ?>
         <div class="alert alert-danger"><?= session()->getFlashdata('error');?></div>
         <?php
         endif;
         ?>
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">Sign in to start your session</p>
               <form action="<?= base_url("login");?>" method="post">
               <?= csrf_field() ?>
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <div class="icheck-primary">
                           <input type="checkbox" id="remember">
                           <label for="remember">
                           Remember Me
                           </label>
                        </div>
                     </div>
                     <!-- /.col -->
                     <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                     </div>
                     <!-- /.col -->
                  </div>
               </form>
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="<?= base_url("public/assets/plugins/jquery.min.js"); ?>"></script>
      <!-- Bootstrap 4 -->
      <script src="<?= base_url("public/assets/plugins/bootstrap.bundle.min.js"); ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url("public/assets/plugins/adminlte.min.js"); ?>"></script>
   </body>
</html>
