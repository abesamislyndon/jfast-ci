<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="<?php echo base_url(); ?>driver_info/job_list/<?php $driver = $this->session->userdata["logged_in"]["id"]; echo $driver; ?>">
            <i class="fa fa-money"></i><span>Active</span>
          </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>driver_info/driver_history/<?php $driver = $this->session->userdata["logged_in"]["id"]; echo $driver; ?>">
            <i class="fa fa-money"></i><span>Completed</span>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-search"></i></i> <span>Manage Account</span>
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
