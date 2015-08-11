<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="<?php echo base_url(); ?>driver_info/job_list/<?php $driver = $this->session->userdata["logged_in"]["id"]; echo $driver; ?>">
          <i class="fa fa-pencil-square-o"></i><span>Active</span> <?php foreach($count as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>

          </a>
          </li>
          <li>
          <a href="<?php echo base_url(); ?>driver_info/for_job_complete/<?php $driver = $this->session->userdata["logged_in"]["id"]; echo $driver; ?>">
          <i class="fa fa-pencil-square-o"></i><span>For Job Complete</span> <?php foreach($count_for_job_complete as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>

          </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>driver_info/driver_history/<?php $driver = $this->session->userdata["logged_in"]["id"]; echo $driver; ?>">
              <i class="fa fa-check-square-o"></i><span>Completed Delivery</span> <?php foreach($count_job_complete_driver as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>Manage Account</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Manage_user_accounts/account_list_driver"><i class="fa fa-circle-o"></i>account settings</a></li>
          </ul>
       </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
