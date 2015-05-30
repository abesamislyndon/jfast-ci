
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo base_url(); ?>joblist_bank/incoming_joblist"><span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">Pending Job Bank</span>
                  <span class="info-box-number"><?php foreach($count_jobbank as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-left custom_count_dashboard"><?php echo $value->total; } }?></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo base_url(); ?>joblist_bank/allocate_joblist"><span class="info-box-icon bg-aqua"><i class="fa fa-truck"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">Pending Allocation</span>
                  <span class="info-box-number"> <?php foreach($count_allocate as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-left custom_count_dashboard"><?php echo $value->total; } }?></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo base_url(); ?>joblist_bank/ongoing_job_list"><span class="info-box-icon bg-aqua"><i class="fa fa-cloud-download"></i></span> </a>
                <div class="info-box-content">
                 <span class="info-box-text">Ongoing Job Bank</span>
                 <span class="info-box-number"><?php foreach($count_ongoing_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-left custom_count_dashboard"><?php echo $value->total; } }?></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                 <a href="<?php echo base_url(); ?>joblist_bank/job_invoice_list"><span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span></a>
                <div class="info-box-content">
                  <span class="info-box-text">Pending Job for Invoice</span>
                  <span class="info-box-number"><?php foreach($count_invoice_job as $value){?><?php if( $value->total == 0){?><span class = "notification_no none"></span><?php }else{ ?><small class="label pull-left custom_count_dashboard"><?php echo $value->total; } }?></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Goal Completion</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Add Products to Cart</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Visit Premium Page</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Send Inquiries</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
          
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

      
     
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2015 JFAST COURIER  AND TRANSPORTATION PTE LTD</a>.</strong> All rights reserved.
      </footer>

    
      <div class='control-sidebar-bg'></div>



