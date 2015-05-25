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
        font-size:12px; 
        }
    span{
        padding-bottom-bottom: 120px !important;
    }    


</style>
  <?php 
     if(!empty($individual) ) {
     foreach($individual as $details): ?>  
     <?php foreach ($sample as  $value): ?>
     <h2>Invoice # <?php echo $value->id; ?></h2>
     <?php endforeach; ?>
    
    <span><b>Attention to:</b>&nbsp;&nbsp;<?php echo $details->sender;?></span><br>
    <h6>Delivery Details</h6> 
    <span><b>Date:</b>&nbsp;&nbsp;<?php echo $details->date_request;?></span><br>
    <span><b>Contact Person:</b>&nbsp;&nbsp;<?php echo $details->full_name;?></span><br>
    <span><b>Pickup Adddress:</b>&nbsp;&nbsp;<?php echo $details->address;?></span><br>
    <span><b>Pickup Time:</b>&nbsp;&nbsp;<?php echo $details->time;?></span><br><br>
    <span><b>Tel no:</b>&nbsp;&nbsp;<?php echo $details->tel_no;?></span><br>
    <span><b>Email:</b>&nbsp;&nbsp;<?php echo $details->email;?></span><br>


   

    <table cellspacing="0" style="text-align: center; font-size: 9pt; padding:1px; border-collapse: collapse;">
     <tbody>
    <tr>
        <th style="width:80px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">DESCRIPTION</th>
        <th style="width:439;border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">DETAILS</th>
        <th style="width:90px; border: solid 1px black;font-weight:bold; font-style:italic;border-collapse: collapse;">COST</th>
    </tr>
      
       <?php foreach($individual as $details): ?>  
         <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Destination</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->destination ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->destination_cost ?></td>
        </tr>
          <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Weight</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->weight ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->weight_cost ?></td>
        </tr>  

         <tr>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;">Dimension</td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->dimension ?></td>
            <td style=" border: solid 1px black; font-style:italic;border-collapse: collapse;"><?php echo $details->dimension_cost ?></td>
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

     <table cellspacing="0" style="text-align: center; font-size: 9pt;padding:4px;margin-top:-6px;margin-left:90px;border-collapse: collapse;">
        <?php foreach($individual as $subtotal) : ?>  
        <tr style="font-size: 8pt;">
        <td style="width: 118px; border: none;">&nbsp;</td>
        <td style="width: 190px; border: none;">&nbsp;</td>
        <td style="background-color:#e9e6e6; width: 90px; height:1px;border: solid 1px black;font-weight:bold;font-size:10pt;font-style:italic;border-collapse: collapse;"><b>SUB TOTAL</b></td>
        <td style="background-color:#e9e6e6; width: 90px; border: solid 1px black;font-size:10pt;font-style:italic;border-collapse: collapse;"><b><?php $sub = $subtotal->destination_cost + $subtotal->labor_cost + $subtotal->weight_cost +  $subtotal->dimension_cost ; echo number_format($sub, 2) ?></b></td>
        </tr>
     
        <tr>
        <td colspan="2" align="left">
        <span style="font-size: 8pt; font-weight: normal;">
        </span>
        </td>
        <td style="background-color:#e9e6e6; border: solid 1px black;font-weight:bold;font-size:10pt;font-style:italic; " align="center"><b>7% GST</b></td>
        <td style="background-color:#e9e6e6; border: solid 1px black;font-weight:bold;font-size:10pt;font-style:italic; " align="center"><b><?php $sub = $subtotal->destination_cost + $subtotal->labor_cost + $subtotal->weight_cost +  $subtotal->dimension_cost ; $gst = (7 * $sub) / 100; echo number_format($gst,2);  ?></b></td>
        </tr>
        <tr>
        <td colspan="2" align="left">
        <span style="font-size: 8pt; font-weight: normal;">
        </span>
        </td>
        <td style="background-color:#ccc; border: solid 1px black;font-weight:bold;  font-size:13px;" align="center"><b>TOTAL SGD</b></td>
        <td style="background-color:#ccc; border: solid 1px black;font-size:13px;" align="center"><b><?php $sub = $subtotal->destination_cost + $subtotal->labor_cost + $subtotal->weight_cost +  $subtotal->dimension_cost ; $gst = (7 * $sub) / 100; echo number_format($gst + $sub,2);  ?></b></td>
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
        <b>Jobe Done by:</b>
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
            _________________________________<br><br>
            For - F & L REINSTATEMENT PTE LTD
        </td>
        </tr>
    </table>
    </nobreak>



    