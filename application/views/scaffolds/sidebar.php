

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
              <a href="<?php echo base_url();?>/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
               <li>
              <a href="<?php echo base_url(); ?>joblist_bank/incoming_joblist">
                  <i class="fa fa-pencil-square-o"></i><span>Incoming Job Bank</span> <?php foreach($count_jobbank as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li> 
            <li>
              <a href="<?php echo base_url(); ?>joblist_bank/allocate_joblist">
                 <i class="fa fa-truck"></i><span>Allocate Job Bank</span>  <?php foreach($count_allocate as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li> 
            <li>
            <a href="<?php echo base_url(); ?>joblist_bank/ongoing_job_list">
              <i class="fa fa-files-o"></i><span>Ongoing Job Bank</span><?php foreach($count_ongoing_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>joblist_bank/job_invoice_list">
                <i class="fa fa-th"></i> <span>Job Bank Invoice</span> <?php foreach($count_invoice_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>form"><i class="fa fa-circle-o"></i>Job Delivery Form</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>

          <li class="header">Search </li>

          <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Manage Search</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Search by Job Bank #</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>

          <li class="header">OTHERS </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Manage User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
