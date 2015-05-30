<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-md-5">
            <!-- general form elements disabled -->
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Information Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <?php foreach ($individual as  $value): ?>
                  <?php echo form_open_multipart('form/process_job_request');?>  
               
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "2" />       

                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name" class="form-control" value = "<?php echo $value->full_name ?>"/ disabled>
                  </div>
                  <div class="form-group">
                     <label>Company</label>
                     <input type="text" name = "company_client" class="form-control" value = "<?php echo $value->company_client ?>"  disabled>
                  </div>
                  <div class="form-group">
                     <label>Tel no.</label>
                     <input type="text" name = "tel_no" class="form-control" value = "<?php echo $value->tel_no ?>"  disabled>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->email ?>"  disabled>
                  </div>
                  
                   <div class="form-group">
                     <label>Date</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right" id="datepicker" value = "<?php echo $value->date_request ?>"  disabled>
                     </div>
                  </div>
           
                  <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <label>Time</label>
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker" value = "<?php echo $value->time ?>"  disabled>
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class = "confirm-div">
                  <p><?php echo $this->session->flashdata('msg'); ?></p>
               </div>
            </div>
         </div>


      <div class="col-md-7">
            <div class="box box-info">
               <div class="box-body">
                  <table class="table table-bordered table-custom">
                     <label>Complete Summary</label>
                     <tr>
                        <th>Destination</th>
                        <th>Weight</th>
                        <th>Dimension</th>
                        <th>No. of Labor</th>
                        <th>Total Cost</th>
                     </tr>
                     <tr>
                        <td><?php echo $value->destination ?></td>
                        <td><?php echo $value->weight ?></td>
                        <td><?php echo $value->dimension ?></td>
                        <td><?php echo $value->labor ?></td>
                        <td><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                     </tr>
                  </table>
                  <hr>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Complete address</label>
                     <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->address ?>" disabled> </div>
                  <hr>
                  <div class='box'>
                     <div class='box-header'>
                        <label>Complete Job Details</label>
                        <div class="pull-right box-tools">
                           <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <div class='box-body pad'>
                       <textarea class="form-control details" name = "job_details" rows="3"  disabled><?php echo $value->job_details ?></textarea>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <div class="col-sm-7">
                     <a href="#spec" role="button"  class = "btn btn-success btn-lg" data-toggle="modal" data-load-remote="<?php echo base_url();?>driver_info/" data-remote-target="#spec .modal-body">Generate Pdf&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></a>
                  </div>
             
               </div>
               <!--end of box body-->
            </div>
            <!--end of box info-->
         </div>
         <!--end of col-sm-7-->
      </div>
      <!--/.col (right) -->
   </section>
   <!-- /.content -->
</div>
