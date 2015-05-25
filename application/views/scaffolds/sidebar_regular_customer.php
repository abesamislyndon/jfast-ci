

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN </li>
            <li class="active treeview">
              <a href="<?php echo base_url();?>/regular_customer">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
       
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
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Search  Job Bank #</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i>Search Invoice</a></li>
              </ul>
            </li>

         

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
