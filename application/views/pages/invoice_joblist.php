<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class = "confirm-div"></div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">JOB BANK FOR INVOICE</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-custom">
                          <tr>
                        <th style="width:40px">id</th>
                              <th>Date Request</th>
                              <th>Destination</th>
                              <th style="width:290px">Pickup Details </th>
                              <th style="width:290px">Delivery Details</th>
                              <th>Job Description</th>
                               <th style="width:220px">Driver Details</th>
                              <th style="width:90px">Requested by</th>
                              <th style="width:90px">Cost</th>
                              <th>Remarks</th>
                              <th>Actions</th>
                        </tr>
                               <?php if($ongoing== true){ ?>   
                            <?php foreach ($ongoing as $value):?>
                                <tr>
                             <td><?php echo $value->job_request_id?></td>
                             <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                             <td>&nbsp;&nbsp;<?php echo $value->destination?></td>
                             <td>
                                  <ul class = "details">
                                   <li><b>Contact Person:</b>&nbsp;&nbsp;<?php echo $value->full_name?></li>
                                   <li><b>Company:</b>&nbsp;&nbsp;<?php echo $value->company_client?></li>
                                   <li><b>Tel. No.:</b>&nbsp;&nbsp;<?php echo $value->tel_no?></li>
                                   <li><b>Pickup Address:</b>&nbsp;&nbsp;<?php echo $value->address?></li>
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
                           <td>
                               <ul class = "details">
                                  <li><b>Driver Name:</b>&nbsp;<?php echo $value->name?></li>
                                  <li><b>Company:</b>&nbsp;<?php echo $value->company?></li>
                                  <li><b>Address:</b>&nbsp;<?php echo $value->address?></li>
                                  <li><b>Contact #:</b>&nbsp;<?php echo $value->contact_num?></li>
                               </ul>
                            </td> 
                             <td><?php echo $value->sender?></td>
                             <td class = "cost"><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                                 <td class = "remarks"><br>
                                   <?php
                                     if($value->status == 1) {
                                       echo 'pending job bank for approval';
                                     }elseif($value->status == 2){
                                       echo 'pending job bank for allocate' ;
                                     }elseif ($value->status == 3) {
                                      echo 'ongoing job'; 
                                     }elseif ($value->status == 4) {
                                      echo 'pending for checkout and invoice'; 
                                     }else{
                                      echo 'job finished'; 
                                     }
                                   ?>
                             </td>
                             <td><a href="<?php echo base_url();?>joblist_bank/individualOngoing/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;process</span></a></td>
                          </tr>
                     <?php  endforeach; 
                       }else{?>
                   <tr>
                     <td colspan = "9" class = "no-result">NO RESULT</td>
                    
                   </tr>
                <?php }?>

                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php echo $links; ?>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!--/.col (right) --> 
    </section>
    <!-- /.content -->
</div>