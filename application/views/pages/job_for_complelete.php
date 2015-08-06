<div class="content-wrapper">
   <section class="content">
      <div class="row">
    <?php echo form_open_multipart('driver_info/job_complete','id="form1"' );?>        
    <?php foreach ($individual as  $value): ?>
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />           

         <!--end of column 5-->
         <div class="col-md-12">
            <div class="box box-info">
                   <div class="box-header">
                        <h3 class="box-title1">Job Bank #: <?php echo $value->job_request_id; ?></h3>
                 </div>
               <div class="box-body">
               <table class="table table-bordered table-custom">
                       <div class="box-header">
                          <h3 class="box-title">Pickup Details</h3>
                       </div>

                     <tr>
                        <th>Contact Person</th>
                        <th>Company</th>
                        <th>Tel no.</th>
                        <th>Email</th>
                        <th style="width:390px">Pickup Address</th>
                     </tr>
                     <tr>
                        <td><?php echo $value->full_name ?></td>
                        <td><?php echo $value->company_client ?></td>
                        <td><?php echo $value->tel_no ?></td>
                        <td><?php echo $value->email ?></td>
                        <td><?php echo $value->address_pickup ?></td>
                     </tr>
                  </table>
                   <hr>
               <table class="table table-bordered table-custom">
                      <div class="box-header">
                       <h3 class="box-title">Delivery Details Details</h3>
                     </div>

                     <tr>
                        <th>Contact Person</th>
                        <th>Company</th>
                        <th>Tel no.</th>
                        <th>Email</th>
                        <th style="width:390px">Pickup Address</th>
                     </tr>
                     <tr>
                        <td><?php echo $value->full_name_deliver ?></td>
                        <td><?php echo $value->company_client_deliver ?></td>
                        <td><?php echo $value->tel_no_deliver ?></td>
                        <td><?php echo $value->email_deliver ?></td>
                        <td><?php echo $value->address_deliver ?></td>
                     </tr>
                  </table>
                  <hr>
               <table class="table table-bordered table-custom">
                     <div class="box-header">
                      <h3 class="box-title">Description Details</h3>
                    </div>

                     <tr>
                        <th>Destination</th>
                        <th>Weight</th>
                        <th>Tel no.</th>
                        <th>Labor</th>
                        <th>Cost&nbsp;&nbsp;&nbsp;&nbsp;<p style = "color:red;">GST&nbsp;&nbsp;<?php $sub = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost; echo $gst = (7 * $sub) / 100; ?>&nbsp;sgd</p></th>
                     </tr>
                     <tr>
                        <td><?php echo $value->destination ?></td>
                        <td><?php echo $value->weight ?></td>
                        <td><?php echo $value->dimension ?></td>
                        <td><?php echo $value->labor ?></td>
                        <td class = "cost"><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                     </tr>
                  </table>
            
                  <hr>
            
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
                       <textarea class="form-control details2" name = "job_details" rows="3" disabled><?php echo strip_tags($value->job_details);?></textarea>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <div class="col-sm-7">
                     <input type = "submit" name = "submit"  class = "btn btn-success btn-lg" value = "Job Complete">
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