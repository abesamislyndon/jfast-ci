<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>JFAST</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>asset/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>asset/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/stacktable.css">
    <script src="<?php echo base_url();?>asset/tiny_mce/tiny_mce.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      jQuery(document).ready(function($) {

      // site preloader -- also uncomment the div in the header and the css style for #preloader
      $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
      });

      });
    </script>

    <script type="text/javascript">
    tinyMCE.init({
        mode : "specific_textareas",
        editor_selector : "myTextEditor",
        theme : "simple"
    });
  </script>
  </head>
   <body class="skin-blue sidebar-mini">
     <?php
            if (!$sock = @fsockopen('www.google.com', 80, $num, $error,5)) {
            echo '<p class = "notice"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;you are offline kindly check your connection</p>';
        }
        else{
          echo '';
        }
      ?>
      <div class="wrapper">
        <header class="main-header">
        <a href="<?php echo base_url(); ?>dashboard" class="logo">
          <span class="logo-mini"><b>J</b></span>
          <span class="logo-lg"><b>JFAST</b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                WELCOME&nbsp;<b><?php echo $this->session->userdata["logged_in"]["full_name"]; ?></b>&nbsp;<i class="fa fa-sign-out"></i>
                 </a>
                <ul class="dropdown-menu">
                  <li class="header">Actions</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                          </div>
                          <a href="<?php echo base_url();?>login/logout" class = "logout"><i class="fa fa-sign-out fa-fw"> </i>Logout</a>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div id="preloader"></div>
