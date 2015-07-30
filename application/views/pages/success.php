<div class = "confirm-div"></div>
<div class="content-wrapper">
       <section class="content">
          <div class="row">
            <div class="col-md-12">    
              <!-- general form elements disabled -->
              <div class="box box-info">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php echo form_open_multipart('form/add_job_request');?>  
                  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                      <div class="success-style">
                          <p>SUCCESSFULLY SEND</p>
                          <span>Please choose your next options</span>
                          <ul>
                            <li><a href="<?php echo base_url(); ?>regular_customer/form" class =  "btn btn-info btn-lg"><i class="fa fa-edit"></i>&nbsp;&nbsp;create again</a></li>
                            <li><a href="<?php echo base_url(); ?>regular_customer" class =  "btn btn-info btn-lg"> <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a></li>
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