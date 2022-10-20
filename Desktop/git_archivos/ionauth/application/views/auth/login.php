<!DOCTYPE html>
<html>
  <head>
    <title>GesCalidad | Login</title>
    
    <!-- Responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="icon" href="<?= base_url()?>\assets\img\favicon.ico">
    
    <!-- CSS File -->
    <link rel="stylesheet" href="<?= base_url()?>\assets\css\custom_login.css">
    
    <!-- Bootstrap 3.3.7 -->
    <!-- <link rel="stylesheet" href="https://localhost/gescalidad/assets/adminlte/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ion icons -->
    <link rel="stylesheet" href="https://localhost/codeigniter/assets/adminlte/ionicons.min.css">

  </head>
  <body>
    <div class="row">
      <div class="logo-movistar">
        <img class="img-logo" src="https://localhost/gescalidad/assets/img/logo.png" alt="Movistar">
      </div>
      <div class="logo">
        <img  class="img-logo-movistar" src="https://localhost/gescalidad/assets/img/logo.png" alt="">
      </div>
    </div>

    <div class="login-box" style="background-color: rgba(0,102,255,0.4); width: 300px; height: 365px;">
      <div class="login-logo">
        <b>Bienvenido a GesCalidad</b> 
      </div>
      <p class="login-box-msg">Ingrese sus datos para iniciar sesión</p>
      
      <?php echo form_open("auth/login");?> 
      
        <p class="username">
          <?php echo form_input($identity,"","Email o Username");?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </p>
      
        <p class="password">
          <?php echo form_input($password,"","Contraseña");?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </p>
      
        <p class="button">
          <i class="fa fa-address-card-o" aria-hidden="true"></i> 
          <?php echo form_submit('submit', lang('login_submit_btn'), "button-input");?>
        </p>
      
      <?php echo form_close();?>
      
      <p class="p-password"><a href="forgot_password" class="forgot_password"><?php echo lang('login_forgot_password');?></a></p> 
      <p class="p-registro"><a href="create_user" class="registro"><?php echo lang('index_create_user_link');?></a></p> 
  
    </div>
  </body>
</html>