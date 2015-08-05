<div class="content-wrapper">
<div class="container">
   <div class="row">
<div class="col-md-12 wrapper1">
  <?php foreach ($individual as  $value): ?>
        <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
        <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
        <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
        <input type="hidden" name = "status" class="form-control" value = "2" /> 

         <div class="col-md-12">
            <div class="box box-info">
               <div class="box-body">
                      <div class="box-header">
                        <h3 class="box-title1">Job Bank #: <?php echo $value->job_request_id; ?></h3>
                 </div>
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
               
               </div>
            </div>
         </div>


   <div class="col-md-12">
            <div class="box box-info">
               <div class="box-body">
               <table class="table table-bordered table-custom">
                    <div class="box-header">
                      <h3 class="box-title">Description Details</h3>
                    </div>
                     
                     <tr>
                        <th>Destination</th>
                        <th>Destination</th>    
                     </tr>
                     
                      <tr>
                        <td>DATE:</td>
                        <td><?php echo $value->time ?></td>
                      </tr>
                      
                      <tr>
                        <td>TIME</td>
                        <td><?php echo $value->weight ?></td>
                      </tr>
                      
                      <tr>
                        <td>DESTINATION</td>
                        <td><?php echo $value->dimension ?></td>
                       </tr>
                       <tr>
                        
                        <td>NO. OF TRIPS</td>
                        <td><?php echo $value->labor ?></td>
                        </tr>

                        <tr>
                        <td>WEIGHT</td>
                        <td class="cost">
                          <?php 
                              $sub  = 
                              $value->destination_cost + 
                              $value->weight_cost +  
                              $value->labor_cost + 
                              $value->sumt + 
                              $value->vehicle_cost + 
                              $value->trip_cost;  

                              echo number_format($sub,2); 
                          ?>
                        </td>
                     </tr>
                  </table>       
              </div>
        </div>
 </div>      

         <!--end of column 5-->
         <div class="col-md-12">
            <div class="box box-info">
               <div class="box-body">
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
                     <a href="#spec" role="button"  class = "btn btn-success btn-lg" data-toggle="modal" data-load-remote="<?php echo base_url();?>driver_info/" data-remote-target="#spec .modal-body">Allocate&nbsp;<i class="fa fa-truck"></i></a>
                  </div>
               
               <?php echo form_open_multipart('joblist_bank/add_allocate','id="form1"' );?>  
                  <!--modal-->
                  <div id="spec" class="modal modal2"  tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header header-spec">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-truck"></i>&nbsp;Allocate</h4>
                               <input type="hidden" name = "job_bank_id" class="form-control"  value = "<?php echo $value->job_request_id ?>"/>
                           </div>
                           <div class="modal-body">
                         
                           </div>
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name = "submit"><i class="fa fa-check"></i>&nbsp;&nbsp;allocate</button>
                              <button type="button" class="btn btn-primary1" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
                           </div>
                        </div>
                     </div>
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

</div>
<!--end of content wrapper-->