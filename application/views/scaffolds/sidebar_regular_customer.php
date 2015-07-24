

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>regular_customer/form"><i class="fa fa-circle-o"></i>Job Delivery Form</a></li>
              </ul>
            </li>

          <li class="header">Search </li>

         <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i></i> <span>Manage Search</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>search/jobBank_regular"><i class="fa fa-circle-o"></i>Search  Job Bank #</a></li>
                <li><a href="<?php echo base_url();?>search/invoice_regular"><i class="fa fa-circle-o"></i>Search Invoice #</a></li>
              </ul>
            </li>


          <li class="header">Generate Report</li>

          <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i></i> <span>Manage Report</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="<?php echo base_url();?>generate_history/jobBank_regular"><i class="fa fa-circle-o"></i>Generate by Job Bank #</a></li>
                <li><a href="<?php echo base_url();?>generate_history/invoice_regular"><i class="fa fa-circle-o"></i>Search Invoice</a></li>
             </ul>
            </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-search"></i></i> <span>Manage Account</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Manage_user_accounts/account_list_regular"><i class="fa fa-circle-o"></i>account settings</a></li>
          </ul>
         </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
