<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-md-5">
            <!-- general form elements disabled -->
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Information Details</h3>
               </div>
          <?php echo form_open_multipart('joblist_bank/job_invoice','id="form1"' );?>  
               <div class="box-body">
                  <?php foreach ($individual as  $value): ?>
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />                   
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
                  <div class="form-group">
                     <label>Date</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right" id="datepicker" value = "<?php echo $value->date_request ?>"/>
                     </div>
                  </div>
                  <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <label>Time</label>
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker" value = "<?php echo $value->time ?>"/>
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

         <!--end of column 5-->
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
                     <input type="text" name = "address" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->address ?>">
                  </div>
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
                       <textarea class="form-control myTextEditor details" name = "job_details" rows="3"><?php echo $value->job_details ?></textarea>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <div class="col-sm-7">
                     <input type = "submit" name = "submit"  class = "btn btn-success btn-lg" value = "Checkout and Invoice">
                  </div>

               
     
               </form>   
                 <!--end of modal-->

               </div>
               <!--end of box body-->
            </div>
            <!--end of box info-->
         </div>
         <!--end of col-sm-7-->
      </div>
      <!--end of row upper part-->
   </section>
</div>
<!--end of content wrapper-->