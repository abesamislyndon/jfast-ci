<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">ALLOCATE -  APPROVED JOB BANK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-custom">
                    <tr>
                        <th style="width:100px">Job Bank id</th>
                        <th>Date Request</th>
                        <th>Client Details</th>
                        <th style="width:290px">Address Details</th>
                        <th>Delivery Details</th>
                        <th>Regular Customer Sender</th>
                        <th>Cost</th>
                        <th style="width:90px">Remarks</th>
                        <th>Action</th>
                     </tr>
                   <?php if($allocate == true){ ?>   
                   <?php foreach ($allocate as $value):?>
                    <tr>
                     <td><?php echo $value->job_request_id?></td>
                     <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                     <td>
                          <ul class = "details">
                           <li><b>Client name:</b>&nbsp;&nbsp;<?php echo $value->full_name?></li>
                           <li><b>Company:</b>&nbsp;&nbsp;<?php echo $value->company_client?></li>
                           <li><b>Tel. No.:</b>&nbsp;&nbsp;<?php echo $value->tel_no?></li>
                        </ul>
                     </td>
                      <td>
                        <ul class = "details">
                           <li><b>Destination:</b>&nbsp;&nbsp;<?php echo $value->destination?></li>
                           <li><b>pickup Address:</b>&nbsp;&nbsp;<?php echo $value->address?></li>
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
                       <td><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                           <td class = "remarks"><br>
                             <?php
                               if($value->status == 1) {
                                 echo 'pending job bank for approval';
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
                      <td><a href="<?php echo base_url();?>joblist_bank/individualAllocate/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;process</span></a></td>
                    </tr>
                    <?php endforeach; ?>
                   <?php }else{?>
                           <tr>
                             <td colspan = "9" class = "no-result">NO RESULT</td>
                            
                           </tr> 
                        <?php }?>     
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   <?php echo $links; ?>
                </div>
              </div><!-- /.box -->

           </div>
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>
      