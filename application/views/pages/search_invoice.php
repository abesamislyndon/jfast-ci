<table class="table table-bordered" id = "resultTable">
      <?php if (isset($res) & ($res <> NULL)) {?>  
      <?php foreach ($res as $value):?>
      <tr>
         <td><?php echo $value->id?></td>
         <td><?php echo $value->job_request_id?></td>
         <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
         <td><?php echo $value->full_name?></td>
         <td><?php echo $value->company_client?></td>
         <td><?php echo $value->tel_no?></td>
         <td><?php echo $value->destination?></td>
         <td><?php echo $value->address_pickup?></td>
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
         <td class = "cost"><?php $sub = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost; $gst = (7 * $sub) / 100; echo number_format($gst + $sub,2); ?></td>                   
                 
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
      <?php endforeach; ?>
      <?php }?>            
   </table>
