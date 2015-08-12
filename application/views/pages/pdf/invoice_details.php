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
    }
    td{
       padding:8px;
    }
    tr{
        border-collapse: collapse !important;
    }
    th{
        padding:5px 8px;
        background:#ccc;
        border-collapse: collapse;
        border: none;
    }
    hr{
        border:1px solid #000; 
    }
    span{
        margin-left:0px;
    }
    p{
        text-align: center;
        margin:8px; 
    }
    h3{
        text-align: center;
        margin: 0px;
        font-size:26px;
    }
    h5{
        text-align: center;
        margin:0px;
        font-style: italic; 
    }
    h4{
        text-align:right;
        margin-top:0px;  
        position: absolute;
        color:red;
    }
    h2{
        text-align:right;
        margin-top:17px;  
        position: absolute;
        color:red;
        font-size:17px; 
    }
    h6{
        text-align:right;
        margin-top:40px;  
        position: absolute;
        color:black;
        font-size:10px; 
    }
    span{
        padding-bottom-bottom: 120px !important;
    } 
    .sample{
        background: red !important;
    }   
</style>

  <?php 
     if(!empty($individual) ) {
     foreach($individual as $details): ?>  
     <?php foreach ($sample as  $value): ?>
     <h2>Invoice # : <?php echo $value->id; ?></h2>
     <h6>Remarks : <?php  if($value->remarks == 'approved'){ echo "Job Complete";}else{ echo $value->remarks;}  ?></h6>
     <?php endforeach; ?>
     <span><b>Attention to:</b>&nbsp;&nbsp;<?php echo $details->full_name;?></span><br>
     <span><b>Address:</b>&nbsp;&nbsp;<?php echo $details->address;?></span><br>
     <span><b>Company:</b>&nbsp;&nbsp;<?php echo $details->company;?></span><br><br>

     <span><b>Date Request:</b>&nbsp;&nbsp;<?php $day = date('l', strtotime($details->date_request));$month = date(' F j, Y',strtotime($details->date_request)); echo $month; ?></span><br>
     <span><b>Date Complete:</b>&nbsp;&nbsp;&nbsp;<?php $day = date('l', strtotime($details->date_complete));$month = date(' F j, Y',strtotime($details->date_complete)); echo $month; ?></span><br>
     <span><b>Date Invoice:</b>&nbsp;&nbsp;&nbsp;<?php $day = date('l', strtotime($details->date_invoice));$month = date(' F j, Y',strtotime($details->date_invoice)); echo $month; ?></span><br><br>

     <span><b>Destination:</b>&nbsp;&nbsp;<?php echo $details->destination ?></span><br>
     <span><b>time:</b>&nbsp;&nbsp;<?php echo $details->time ?></span> <br>
        
     <span><b>Pickup Address:</b>&nbsp;&nbsp;<?php echo $details->address_pickup?></span> <br>
     <span><b>Delivery Address:</b>&nbsp;&nbsp;<?php echo $details->address_deliver ?></span> <br><br>
     <span><b>Remarks:</b>&nbsp;&nbsp;<?php echo strip_tags($details->job_details);?></span> 
  
   
    <table cellspacing="0" style="text-align: center; font-size: 9pt; padding:1px; border-collapse: collapse;">
     <tbody>
    <tr>
        <th style="width:80px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">DESCRIPTION</th>
        <th style="width:439;border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">DETAILS</th>
        <th style="width:90px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">COST</th>
    </tr>
      
       <?php foreach($individual as $details): ?>  
          <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Vehicle type</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->vehicle ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->vehicle_cost ?></td>
        </tr>
         <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Destination</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->destination ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->trip_cost ?></td>
        </tr>
          <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">No of Trips</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->no_trips ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->weight_cost ?></td>
        </tr>  

         <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Weight</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->weight ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->weight_cost ?></td>
        </tr> 

        <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">No. of Labor</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->labor ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->labor_cost ?></td>
        </tr>  
        <?php endforeach; ?>
        <?php endforeach; }?>   
     </tbody>
    </table>

  <table cellspacing="0" style="text-align: center; font-size: 9pt; padding:1px; border-collapse: collapse; margin-top:-3px;">
     <tbody>
    <tr>
        <th style="width:80px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">item type</th>
        <th style="width:78;border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">quantity</th>
        <th style="width:326;border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">dimension</th>
        <th style="width:90px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">COST</th>
    </tr>
      
         <?php foreach($individual_item_type as $details): ?>  
          <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->item_type ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->qty_check ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->dimension_check ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->item_type_cost ?></td>
        </tr>
        <?php endforeach; ?>
  
     </tbody>
    </table>



     <table cellspacing="0" style="text-align: center; font-size: 9pt;padding:4px;margin-top:-6px;margin-left:90px;border-collapse: collapse;">
        <?php foreach($individual as $subtotal) : ?>  
        <tr style="font-size: 8pt;">
        <td style="width: 118px; border: none;">&nbsp;</td>
        <td style="width: 190px; border: none;">&nbsp;</td>
        <td style="background-color:#e9e6e6; width: 90px; height:1px;border: solid 1px black;font-weight:bold;font-size:10pt;font-style:italic;border-collapse: collapse;"><b>TOTAL</b></td>
        <td style="background-color:#e9e6e6; width: 90px; border: solid 1px black;font-size:10pt;font-style:italic;border-collapse: collapse;"><b><?php $sub = $subtotal->destination_cost + $subtotal->labor_cost + $subtotal->weight_cost +  $subtotal->vehicle_cost  +  $subtotal->trip_cost + $subtotal->sumt; echo number_format($sub, 2) ?></b></td>
        </tr>
        <tr>
        <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
        <td colspan="4">&nbsp;</td>
        </tr>
           <?php endforeach; ?>    
        </table>
    <nobreak>
    <table cellspacing="0" style="width: 90%; border: none; text-align: center; font-size: 9pt;">
        <tr>
        <td style="width: 60%; text-align: left;">
        <span style="font-size: 10px; font-weight: normal;">
        <b>Certified Job Completed:</b> 
        </span>
        </td>
        <td style="text-align: left;">
        <span style="font-size: 10px; font-weight: normal;">
        </span>
        </td>
        </tr>
     
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
        <td style="text-align: left;">
            _________________________________ <br><br>
            Company Chop and Signature
        </td>
        <td style="text-align: left;">
            <br><br>
           
        </td>
        </tr>
    </table>
</nobreak>    