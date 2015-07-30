<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">INCOMING JOB BANK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-custom" id = "card-table">
                 <thead>
                           <tr>
                              <th style="width:40px">id</th>
                              <th>Date Request</th>
                              <th>Destination</th>
                              <th style="width:290px">Pickup Details </th>
                              <th style="width:290px">Delivery Details</th>
                              <th>Job Description</th>
                              <th>Requested by</th>
                              <th style="width:90px">Cost</th>
                              <th style="width:90px">Remarks</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($job_list_incoming == true){ ?>
                              <?php foreach($job_list_incoming as $value): ?>
                                  <tr>
                                     <td><?php echo $value->job_request_id?></td>
                                     <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                                     <td>&nbsp;&nbsp;<?php echo $value->destination?></td>
                                     <td>
                                          <ul class = "details">
                                           <li><b>Contact Person:</b>&nbsp;&nbsp;<?php echo $value->full_name?></li>
                                           <li><b>Company:</b>&nbsp;&nbsp;<?php echo $value->company_client?></li>
                                           <li><b>Tel. No.:</b>&nbsp;&nbsp;<?php echo $value->tel_no?></li>
                                           <li><b>Pickup Address:</b>&nbsp;&nbsp;<?php echo $value->address_pickup?></li>
                                        </ul>
                                     </td>
                                     <td>
                                        <ul class = "details">
                                           <li><b>Contact Person:</b>&nbsp;&nbsp;<?php echo $value->full_name_deliver?></li>
                                           <li><b>Company:</b>&nbsp;&nbsp;<?php echo $value->company_client_deliver?></li>
                                           <li><b>Tel. No.:</b>&nbsp;&nbsp;<?php echo $value->tel_no_deliver?></li>
                                           <li><b>Delivery Address:</b>&nbsp;&nbsp;<?php echo $value->address_deliver?></li>
                                        </ul>
                                     </td>
                                     <td>
                                        <ul class = "details">
                                           <li><b>Time:</b>&nbsp;<?php echo $value->time?></li>
                                           <li><b>Weight:</b>&nbsp;<?php echo $value->weight?></li>
                                           <li><b>Dimension:</b>&nbsp;<?php echo $value->dimension?></li>
                                           <li><b>No. of Labor:</b>&nbsp;<?php echo $value->labor?></li>
                                        </ul>
                                     </td>
                                     <td><?php echo $value->sender?></td>
                                     <td class = "cost">
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
                                         <td class = "remarks"><br>
                                           <?php
                                             if($value->status == 1) {
                                               echo 'pending job bank for update price';
                                             }elseif($value->status == 2){
                                               echo 'pending job bank for allocate' ;
                                             }elseif ($value->status == 3) {
                                              echo 'ongoing job'; 
                                             }elseif ($value->status == 4) {
                                              echo 'pending for checkout for invoice'; 
                                             }else{
                                              echo 'job finished'; 
                                             }
                                           ?>
                                     </td>
                                     <td><a href="<?php echo base_url();?>joblist_bank/individual_approved_reject/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;process</span></a></td>
                                  </tr>
                             <?php  endforeach; 
                               }else{?>
                           <tr>
                             <td colspan = "9" class = "no-result">NO RESULT</td>
                            
                           </tr>
                        <?php }?>
                        </tbody>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

           </div>
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>