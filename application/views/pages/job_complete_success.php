<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
              
              <!-- general form elements disabled -->
              <div class="box box-info">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php echo form_open_multipart('form/add_job_request');?>  
                  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                      <div class="success-style">
                          <p>SUCCESSFULLY  JOB COMPLETE </p>
                          <ul>
                            <li><a href="<?php echo base_url(); ?>joblist_bank/job_invoice_list" class =  "btn btn-info btn-lg"> <i class="fa fa-files-o"></i> &nbsp;&nbsp;Job Bank Invoice</a></li>
                            <li><a href="<?php echo base_url(); ?>joblist_bank/ongoing_job_list" class =  "btn btn-info btn-lg"> <i class="fa fa-files-o"></i> &nbsp;&nbsp;Ongoing Job Bank</a></li>
                            <li><a href="<?php echo base_url(); ?>joblist_bank/allocate_joblist" class =  "btn btn-info btn-lg"><i class="fa fa-truck"></i>&nbsp;&nbsp;Allocate Job Bank</a></li>
                            <li><a href="<?php echo base_url(); ?>joblist_bank/incoming_joblist" class =  "btn btn-info btn-lg"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Incoming job Bank List</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard" class =  "btn btn-info btn-lg"> <i class="fa fa-dashboard"></i> &nbsp;&nbsp;ashboard</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-4"></div>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
  
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>
