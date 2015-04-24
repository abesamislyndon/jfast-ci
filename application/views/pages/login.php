<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url();?>asset/css/font-awesome.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
  if (!$sock = @fsockopen('www.google.com', 80, $num, $error,5)) {
      echo '<p class = "notice"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;you are offline kindly check your connection</p>';
  }
  else{
    echo '';
  }
?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url();?>"><b>JFAST</b>&nbsp;Courier and transportation</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <p><?php echo validation_errors(); ?></p>   
        <form action="<?php echo base_url()?>verifylogin" method="post">
          <div class="form-group has-feedback">
              <input name="username" type="text" class="form-control" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
   
          </div>
          <div class="form-group has-feedback">  
            <input name="password" type="password" class="form-control" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
          </div>
          <div class="row">
            <div class="col-xs-8">    
            </div><!-- /.col -->
            <div class="col-xs-4">
               <input type="submit" name="login" value="Sign In" class="btn btn-primary btn-block btn-flat"/>
            </div><!-- /.col -->
          </div>
        </form>
     
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url();?>asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src=".<?php echo base_url();?>asset/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>