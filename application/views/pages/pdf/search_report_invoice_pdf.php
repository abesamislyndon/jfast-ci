<style>
    label{
        color:red;
        font-weight: bold;
    }

    table{
        margin-top:20px;
        border-collapse: collapse !important; 
        word-wrap: break-word;
        table-layout: fixed; 
        width:11%; 
    }
    td{
       padding:8px;
       font-size:9px; 
       text-align:left; 
    }
    tr{
        border-collapse: collapse !important;
    }
    th{
        padding:5px 8px;
        text-align: center;
        background:#ccc;
        border-collapse: collapse;
        border: none;
    }
    hr{
        border:1px solid #000; 
    }
    span{
        margin-left:0px;
        margin-top: 20px;
    }
    p{
        text-align: center;
        margin:8px; 
    }

    h2{
        text-align:right;
        margin: 0px;
        font-size:12px;
        float: right;
        color:red; 
    }

    h3{
        text-align: center;
        margin: 0px;
        font-size:26px;
    }
    h5{
        text-align:center;
        margin:0px;
        font-style: italic; 
    }
    
    h6{
        text-align:left;
        margin:0px;
    }
       
    h4{
        text-align:right;
        margin-top:0px;  
        position: absolute;
        color:red;
    }
        b {
            color:#727272;
        }
</style>
<span>From:&nbsp;&nbsp;&nbsp;<?php $day = date('l', strtotime($from));$month = date(' F j, Y',strtotime($from)); echo $month; ?></span>
<span>&nbsp;&nbsp;&nbsp;To:&nbsp;&nbsp;&nbsp;<?php $day = date('l', strtotime($to));$month = date(' F j, Y',strtotime($to)); echo $month; ?></span>

<!--********************************************* total caluclation**********************************-->
<h2>TOTAL :&nbsp;&nbsp;
<?php  
    if(!empty($result)){
    $sum = 0; 
     foreach($result as $value):
        $subtotal = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost;
        $sum+=$subtotal;
     endforeach; 
    echo number_format($sum,2);
    }?>&nbsp;sgd</h2>
<!--*********************************************end of calculation**************************************-->

 <table class="table table-bordered" id = "resultTable" >
                        <thead>
                           <tr>
                              <th>Invoice #</th>
                             <th>Date Request</th>
                              <th>Destination</th>
                              <th>Pickup Details </th>
                              <th>Delivery Details</th>
                              <th>Job Description</th>
                               <th>Driver Details</th>
                              <th >Requested by</th>
                              <th>Remarks</th>
                               <th>Cost</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($result == true){ ?>
                              <?php foreach($result as $value): ?>
                            <tr>
                                <td><?php echo $value->id?></td>
                                <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                             <td>&nbsp;&nbsp;<?php echo $value->destination?></td>
                             <td>
                                  <ul class = "details">
                                   <li><b>Contact Person:</b><br><?php echo $value->full_name?></li>
                                   <li><b>Company:</b><br><?php echo $value->company_client?></li>
                                   <li><b>Tel. No.:</b><br><?php echo $value->tel_no?></li>
                                   <li><b>Pickup Address:</b><br><?php echo $value->address_pickup?></li>
                                </ul>
                             </td>
                             <td>
                                <ul class = "details">
                                   <li><b>Contact Person:</b><br><?php echo $value->full_name_deliver?></li>
                                   <li><b>Company:</b><br><?php echo $value->company_client_deliver?></li>
                                   <li><b>Tel. No.:</b><br><?php echo $value->tel_no_deliver?></li>
                                   <li><b>Delivery Address:</b><br><?php echo $value->address_deliver?></li>
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
                               <td class = "cost"><?php $sub = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost; $gst = (7 * $sub) / 100; echo number_format($gst + $sub,2);?></td>   
                               </tr>
                             <?php  endforeach; 
                               }else{?>
                            <tr>
                             <td colspan = "9" class = "no-result">NO RESULT</td>   
                            </tr>
                         <?php }?>
                        </tbody>
                     </table>