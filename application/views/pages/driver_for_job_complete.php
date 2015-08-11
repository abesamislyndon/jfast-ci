<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class = "confirm-div"></div>
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">FOR JOB COMPLETE LIST</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table class="table table-bordered table-custom" id="card-table">
                     <thead>
                     <tr>
                        <th style="width:40px">id</th>
                        <th>Date Request</th>
                        <th style="width:290px">Pickup Details </th>
                        <th style="width:290px">Delivery Details</th>
                        <th>Job Description</th>
                        <th>Actions</th>
                     </tr>
                   </thead>
                      <?php if($ongoing== true){ ?>   
                     <?php foreach ($ongoing as $value):?>
                        <tr class = "s">
                             <td><?php echo $value->job_request_id?></td>
                             <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
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
                                   <li><b>No. of Labor:</b>&nbsp;<?php echo $value->labor?></li>
                                </ul>
                                <ul class = "details">
                                   <li><b>Vehicle:</b>&nbsp;<?php echo $value->vehicle?></li>
                                   <li><b>No. trips</b>&nbsp;<?php echo $value->no_trips?></li>
                                </ul>         
                             </td>
                     
                             <td><a href="<?php echo base_url();?>driver_info/job_for_completion/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;process</span></a></td>
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