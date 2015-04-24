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
                  <?php echo form_open_multipart('form/add_job_request');?>  
                        <div class = "confirm-div"></div>
                    <div class="form-group">
                      <label>Contact Person (Full name)</label>
                      <input type="text" name = "full_name" class="form-control" placeholder="Enter ..."/>
                    </div>
            
                        
                     <div class="form-group">
                      <label>Tel no.</label>
                      <input type="text" name = "tel_no" class="form-control" placeholder="Enter ..."/>
                    </div>
            
                   <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name = "email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                </div><!-- /.box-body -->
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
                      <input type="text" name = "date_request" class="form-control pull-right" id="datepicker"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                 <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time</label>
                      <div class="input-group">
                        <input type="text" name = "time" class="form-control timepicker"/>
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>

              
                   <div class="form-group">
                      <label>From: Address</label>
                      <input type="text" name = "address_from" class="form-control" placeholder="Enter ..."/>
                    </div>


                    <div class="form-group">
                      <label>To: Address</label>
                      <input type="text" name = "address_to" class="form-control" placeholder="Enter ..."/>
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
                        <textarea class="textarea" name = "job_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <input type = "submit" name = "submit" class="btn btn-block btn-success btn-lg" value = "submit">
                  
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>