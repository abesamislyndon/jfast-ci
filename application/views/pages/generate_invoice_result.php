<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <!--/.col (right) -->
         <div class="box-body">
            <div class="panel  panel-info">
               <div class="panel-body">
                  <div class="box box-info">
                     <div class="box-header">
                        <h3 class="box-title">GENERATE INVOICE HISTORY  </h3>
                        <br><br>
                      </div>   
                       <?php echo form_open_multipart('generate_history/invoice_generate');?>  
                           <div class=" col-md-4">
                              from<input type="text" class="form-control" id = "from" name = "from" autocomplete="off">
                           </div>
                           <div class=" col-md-4">
                              to<input type="text" class="form-control" id = "to" name = "to" autocomplete="off">
                           </div>
                             <div class=" col-md-4">
                             <input type = "submit" name = "submit" class="btn  btn-success btn-md generate-style-btn" value = "GENERATE">
                             <a href="<?php echo base_url();?>create_pdf/search_report_quotation/<?php echo $date_from; ?>/<?php echo $date_to; ?>" target = "_blank" class="btn  btn-success btn-md generate-style-btn">&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;</a> 
                             <span class = "total1">TOTAL :&nbsp;&nbsp;
                        <?php  
                        if(!empty($result)){
                        $sum = 0; 
                         foreach($result as $value):
                            $subtotal = 
                            $value->destination_cost + 
                                            $value->weight_cost +  
                                            $value->labor_cost + 
                                            $value->sumt + 
                                            $value->vehicle_cost + 
                                            $value->trip_cost;  
                            $sum+=$subtotal;
                         endforeach; 
                        echo number_format($sum,2);
                       }?>&nbsp;sgd
                     </span>
                     </div>
                     <br><br><br>
                     </form>
                     <br>
                     <table class="table table-bordered" id="card-table">
                        <thead>
                           <tr>
                              <th style="width:100px">Invoice #</th>
                              <th style="width:100px">Job Bank id</th>
                              <th>Date Request</th>
                              <th>Date Complete</th>
                              <th>Destination</th>
                              <th style="width:290px">Pickup Details </th>
                              <th style="width:290px">Delivery Details</th>
                              <th>Job Description</th>
                               <th style="width:220px">Driver Details</th>
                              <th style="width:90px">Requested by</th>
                              <th style="width:90px">Cost</th>
                              <th>Remarks</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($result == true){ ?>
                              <?php foreach($result as $value): ?>
                                  <tr>
                                     <td><?php echo $value->id?></td>
                                     <td><?php echo $value->job_request_id?></td>
                                     <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                                     <td><?php $day = date('l', strtotime($value->date_complete));$month = date(' F j, Y',strtotime($value->date_complete)); echo $month; ?></td>
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
                                   <td>
                                       <ul class = "details">
                                          <li><b>Driver Name:</b>&nbsp;<?php echo $value->full_name?></li>
                                          <li><b>Company:</b>&nbsp;<?php echo $value->company?></li>
                                          <li><b>Address:</b>&nbsp;<?php echo $value->address?></li>
                                          <li><b>Contact #:</b>&nbsp;<?php echo $value->contact_no?></li>
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
                                              echo 'pending for checkout and invoice'; 
                                             }else{
                                              echo 'job finished'; 
                                             }
                                           ?>
                                     </td>
                                     <td><a href="<?php echo base_url();?>create_pdf/print_invoice/<?php echo $value->job_request_id ?>" target = "_blank"><span class="badge bg-blue custom">&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;</span></a></td>
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