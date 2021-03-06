<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <!--/.col (right) -->
         <div class="box-body">
            <div class="panel  panel-info">
               <div class="panel-body">
                  <div class="box box-info">
                     <div class="box-header">
                        <h3 class="box-title">GENERATE JOB BANK HISTORY</h3>
                        <br><br>
                      </div>   
                       <?php echo form_open_multipart('generate_history/jobBank_generate_regular');?>  
                           <div class=" col-md-4">
                              from<input type="text" class="form-control" id = "from" name = "from" autocomplete="off">
                           </div>
                           <div class=" col-md-4">
                              to<input type="text" class="form-control" id = "to" name = "to" autocomplete="off">
                           </div>
                             <div class=" col-md-4">
                             <input type = "submit" name = "submit" class="btn  btn-success btn-md generate-style-btn" value = "GENERATE">
                        </div>
                           <br><br><br>
                     </form>
                     <br>
                     <table class="table table-bordered" id = "resultTable">
                        <thead>
                           <tr>
                              <th style="width:100px">Job Bank id</th>
                              <th>Date Request</th>
                              <th>Client Details</th>
                              <th style="width:290px">Address Details</th>
                              <th>Delivery Details</th>
                              <th>Customer Sender</th>
                              <th>Cost</th>
                              <th style="width:90px">Remarks</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($result == true){ ?>
                              <?php foreach($result as $value): ?>
                                  <tr>
                                     <td><?php echo $value->job_request_id?></td>
                                     <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                                     <td>
                                          <ul class = "details">
                                           <li><b>Client name</b>&nbsp;<?php echo $value->full_name?></li>
                                           <li><b>Company</b>&nbsp;<?php echo $value->company_client?></li>
                                           <li><b>Tel. No.</b>&nbsp;<?php echo $value->tel_no?></li>
                                        </ul>
                                     </td>
                                     <td>
                                        <ul class = "details">
                                           <li><b>Destination</b>&nbsp;<?php echo $value->destination?></li>
                                           <li><b>pickup Address</b>&nbsp;<?php echo $value->address_pickup?></li>
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
                                               echo 'pending job bank for approval';
                                             }elseif($value->status == 2){
                                               echo 'pending job bank for allocate' ;
                                             }elseif ($value->status == 3) {
                                              echo 'ongoing job'; 
                                             }elseif ($value->status == 4) {
                                              echo 'pending for checkout for invoice'; 
                                             }else{
                                                    echo $value->remarks; 
                                             }
                                           ?>
                                     </td>
                                     <td><a href="<?php echo base_url();?>joblist_bank/individual_search_regular/<?php echo $value->job_request_id ?>" target = "_blank"><span class="badge bg-blue custom"><i class="fa fa-eye"></i>&nbsp;&nbsp;view</span></a></td>
                                  </tr>
                             <?php  endforeach; 
                               }else{?>
                           <tr>
                             <td colspan = "9" class = "no-result">NO RESULT</td>
                            
                           </tr>
                        <?php }?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
</section>
</div>