<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-5">
    
              
              <!-- general form elements disabled -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Information Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php foreach ($individual as  $value): ?>
                 <?php echo form_open_multipart('form/process_job_request');?>  
                 
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "2" />       
                
                  <div class="form-group">
                      <label>Contact Person (Full name)</label>
                      <input type="text" name = "full_name" class="form-control" value = "<?php echo $value->full_name ?>"/>
                    </div>
            
                        
                     <div class="form-group">
                      <label>Tel no.</label>
                      <input type="text" name = "tel_no" class="form-control" value = "<?php echo $value->tel_no ?>"/>
                    </div>
            
                   <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->email ?>">
                    </div>

                </div><!-- /.box-body -->

             <div class = "confirm-div"><p><?php echo $this->session->flashdata('msg'); ?></p></div>

              </div><!-- /.box -->
            </div><!--/.col (right) -->
  
 

            <div class="col-md-7">
              <!-- general form elements disabled -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Job Delivery Decription</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <div class="form-group">
                    <label>Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name = "date_request" class="form-control pull-right" id="datepicker" value = "<?php echo $value->date_request ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                 <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time</label>
                      <div class="input-group">
                        <input type="text" name = "time" class="form-control timepicker" value = "<?php echo $value->time ?>"/>
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>

              
                   <div class="form-group">
                      <label>Destination</label>
                      <input type="text" name = "address_from" class="form-control" value = "<?php echo $value->destination ?>"/>
                    </div>

                    <div class="form-group">
                      <label>Weight</label>
                      <input type="text" name = "address_to" class="form-control" value = "<?php echo $value->weight ?>"/>
                    </div>


                    <div class="form-group">
                      <label>Estimate Cost</label>
                      <input type="text" name = "price" class="form-control" value = "<?php echo $value->destination_cost + $value->weight_cost?>"/>
                    </div>
            
            
                        
                   <div class='box'>
                    <div class='box-header'>
                    <label>Complete Job Details</label>
                      <div class="pull-right box-tools">
                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                      </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body pad'>
                        <textarea class="textarea" name = "job_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value = ""><?php echo $value->job_details ?></textarea>
                    </div>
                  </div>
                <?php endforeach; ?>
                  <div class="col-sm-4">
                  </div>
                  <div class="col-sm-8">
                  <p><input type = "submit" name = "submit_update" class="btn btn-primary btn-lg" value = "update">
                    &nbsp;&nbsp;<input type = "submit" name = "submit_approved" class="btn btn-success btn-lg" value = "approve">
                      &nbsp;&nbsp;<input type = "submit" name = "submit_approved" class="btn btn-success btn-lg" value = "approve and allocate">
                    &nbsp;&nbsp;<input type = "submit" name = "submit_reject" class="btn btn-danger btn-lg" value = "reject">
                  </p>
                 
                  </div>

                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>