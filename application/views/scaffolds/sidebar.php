    <aside class="main-sidebar">
        <section class="sidebar">    
          <ul class="sidebar-menu">
            <li class="header">MAIN </li>
            <li class="active treeview">
              <a href="<?php echo base_url();?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
               <li>
              <a href="<?php echo base_url(); ?>joblist_bank/incoming_joblist">
                  <i class="fa fa-pencil-square-o"></i><span>Incoming Job Bank</span> <?php foreach($count_jobbank as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li> 

            <li>
              <a href="<?php echo base_url(); ?>joblist_bank/job_approval">
                  <i class="fa fa-pencil-square-o"></i><span>Job Approval</span> <?php foreach($count_approval as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li> 
        
        
            <li>
              <a href="<?php echo base_url(); ?>joblist_bank/allocate_joblist">
                 <i class="fa fa-truck"></i><span>Allocate Driver</span>  <?php foreach($count_allocate as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li> 
        
            <li>
            <a href="<?php echo base_url(); ?>joblist_bank/ongoing_job_list">
              <i class="fa fa-files-o"></i><span>Ongoing Pickup Job</span><?php foreach($count_ongoing_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>joblist_bank/job_invoice_list">
                <i class="fa fa-money"></i><span>Checkout and Invoice</span> <?php foreach($count_invoice_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-right bg-green custom_count"><?php echo $value->total; } }?></small>
              </a>
            </li>
        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>form"><i class="fa fa-circle-o"></i>Job Delivery Form</a></li>
              </ul>
            </li>

           <li class="header">Costing Details </li>
            <li class="treeview">
              <a href="#">
               <i class="fa fa-user"></i><span>Manage Costing</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>costing_attributes/location"><i class="fa fa-circle-o"></i>Location</a></li>
                <li><a href="<?php echo base_url();?>costing_attributes/weight"><i class="fa fa-circle-o"></i>Weight</a></li>
                <li><a href="<?php echo base_url();?>costing_attributes/dimension"><i class="fa fa-circle-o"></i>Dimension</a></li>
                <li><a href="<?php echo base_url();?>costing_attributes/labor"><i class="fa fa-circle-o"></i>Labor</a></li>
              </ul>
            </li> 

           <li class="header">Search </li>

           <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i></i> <span>Manage Search</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>search/jobBank"><i class="fa fa-circle-o"></i>Search  Job Bank #</a></li>
                <li><a href="<?php echo base_url();?>search/invoice"><i class="fa fa-circle-o"></i>Search Invoice #</a></li>
              </ul>
           </li>

           <li class="header">Generate Report</li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i></i> <span>Manage Report</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>generate_history/jobBank"><i class="fa fa-circle-o"></i>Job Bank #</a></li>
                <li><a href="<?php echo base_url();?>generate_history/invoice"><i class="fa fa-circle-o"></i>Invoice #</a></li>
                <li><a href="<?php echo base_url();?>generate_history/invoice_with_sender"><i class="fa fa-circle-o"></i>Sender with invoice</a></li>
              </ul>
           </li>

          <li class="header">USERS</li>
            <li class="treeview">
              <a href="#">
               <i class="fa fa-user"></i><span>Manage User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>manage_user_accounts/account_list"><i class="fa fa-circle-o"></i>Users List</a></li>
                <li><a href="<?php echo base_url();?>manage_user_accounts/add_user"><i class="fa fa-circle-o"></i>Add new user</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
