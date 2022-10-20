<!DOCTYPE html>
<html>
  <head>
    <title>GesCalidad | Recuperar Cuenta</title>
    
    <!-- Responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="icon" href=<?php echo base_url()."\assets\img\favicon.ico"?>>
    
    <!-- CSS File -->
    <link rel="stylesheet" href=<?php echo base_url()."\assets\css\custom_login.css"?>>
    <link href="custom_login.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    
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
      <div class="login-box" style="background-color: rgba(0,102,255,0.3); width: 360px; height: 365px;">
            <div class="login-logo">
            <b>Recuperar Cuenta GesCalidad</b> 
            </div>
            <p class="login-box-msg">Si olvidaste tu usuario o contraseña, ingrese su correo y le enviaremos un correo con las instrucciones</p>
            
            <?php echo form_open("auth/forgot_password");?>
            
                  <p class="username" style="width:320px">
                        <?php echo form_input($identity, "", "Correo");?>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </p>
            
                  <p class="button"><?php echo form_submit('submit', lang('forgot_password_submit_btn'), "button-input");?></p>
            
            <?php echo form_close();?> 
            <p class="p-registro"><a href="login" class="registro"><?php echo lang('login_heading');?></a></p> 
      </div>
  </body>
</html>
