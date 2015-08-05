  <div class = "col-md-12 confirm-div"></div>
<div class="content-wrapper">
   <div id="loading">
    <div id="loadingcontent">
        <p id="loadingspinner">
           Sending Job Bank - Please Wait
        </p>
    </div>
  </div>

 <?php foreach ($individual as  $value): ?>
 <?php echo form_open_multipart('form/process_job_request');?>  
 <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
 <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
 <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
 <input type="hidden" name = "status" class="form-control" value = "2" /> 

 <div class="container">
   <div class="row">
      <div class="col-md-6 wrapper1">
            <h4>Pickup Details</h4>
            <hr>
              <div class="form-group">
                  <div class="col-md-4">
                    <label>Contact Person:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                        <input type="text" name = "full_name" class="form-control lg " value = "<?php echo $value->full_name ?>"/>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-4">
                    <label>Company:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                       <input type="text" name = "company_client" class="form-control lg" value = "<?php echo $value->company_client ?>"/>
                  </div>
                </div>


              <div class="form-group">
                  <div class="col-md-4">
                    <label>Tel no:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                          <input type="text" name = "tel_no" class="form-control lg" value = "<?php echo $value->tel_no ?>"/>
                  </div>
               </div>

              <div class="form-group">
                  <div class="col-md-4">
                    <label>Email:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                      <input type="email" name = "email" class="form-control lg" id="exampleInputEmail1" value = "<?php echo $value->email ?>">
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-4">
                    <label>Pickup Address:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                    <input type="text" name = "address_pickup" class="form-control lg" value = "<?php echo $value->address_pickup ?>"/>
                  </div>
               </div>
         </div> 

       <div class="col-md-6 wrapper1">
            <h4>Delivery Details</h4>
            <hr>
              <div class="form-group">
                  <div class="col-md-4">
                    <label>Contact Person:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                        <input type="text" name = "full_name_deliver" class="form-control lg" value = "<?php echo $value->full_name_deliver ?>"/>
                  </div>
               </div>

                <div class="form-group">
                  <div class="col-md-4">
                    <label>Company:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                      <input type="text" name = "company_client_deliver" class="form-control lg" value = "<?php echo $value->company_client_deliver ?>"/>
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-md-4">
                    <label>Tel no:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                         <input type="text" name = "tel_no_deliver" class="form-control lg" value = "<?php echo $value->tel_no_deliver ?>"/>
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-4">
                    <label>Email:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                     <input type="email" name = "email_deliver" class="form-control lg" id="exampleInputEmail1" value = "<?php echo $value->email_deliver ?>">
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-4">
                    <label>Pickup Address:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-8">
                     <input type="text" name = "address_deliver" class="form-control lg" value = "<?php echo $value->address_deliver ?>"/>
                  </div>
               </div>
         </div> 

       <div class="col-md-12 wrapper1">
            <hr>
              <div class="form-group">
                  <div class="col-md-1">
                    <label>DATE:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-11">
                <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right  required lg" id="datepicker" value = "<?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?>"/>
                     </div>
                  </div>
               </div>

                <div class="form-group">
                 <div class="col-md-1">
                    <label>TIME:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-11">
                       <div class="input-group">
                          <div class="input-group-addon">
                           <i class="fa fa-clock-o"></i>
                           </div>
                           <input type="text" name = "time" class="form-control timepicker  required lg" value = "<?php echo $value->time ?>"/>   
                        </div>
                  </div>
               </div>
         </div>


      </div>
   </div>

  <div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>DELIVERY INFORMATION AND ITEM DESCRIPTION</h4>
            <hr>
                <table class = "table">
                     <tr>
                        <td><label>Vehicle</label></td>
                        <td>
                          <select class="form-control" name="vehicle" id="destination" >
                              <option value = "<?php echo $value->vehicle ?>" selected="selected"><?php echo $value->vehicle ?></option>
                               <option value="Van">Van</option>
                               <option value="10 ft Lorry">10 ft Lorry</option>
                               <option value="14 ft Lorry">14 ft Lorry</option>
                               <option value="20 ft Lorry">20 ft Lorry</option>
                               <option value="24 ft Lorry">24 ft Lorry</option>
                               <option value="Bus">Bus</option>
                               <option value="Mini Bus">Mini Bus</option>   
                           </select>
                         </td>
                        <td><input type="text" name = "vehicle_cost" value = "<?php echo $value->vehicle_cost ?>"></td>
                      </tr>
                      
                      <tr>
                        <td><label>Destination</label></td>
                        <td>
                           <select class="form-control" name="destination_get" id="destination" >
                              <option value = "<?php echo $value->destination_id ?>" selected="selected"><?php echo $value->destination ?></option>
                              <?php foreach ($from as $value1) { ?>
                              <option  value = "<?php echo $value1->id ?>"><?php echo $value1->from_destination ?>&nbsp;-&nbsp;<?php echo $value1->to_destination ?></option>
                              <?php  } ?>    
                            </select>
                        </td>
                        <td><input type="text" name = "destination_cost" value = "<?php echo $value->destination_cost ?>"></td>
                      </tr>
                     
                      <tr>
                        <td><label>No. of trips:</label></td>
                        <td>
                            <select class="form-control" name="no_trips" id="destination" >
                              <option value = "<?php echo $value->no_trips ?>" selected="selected"><?php echo $value->no_trips ?></option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                               <option value="6">6</option>
                               <option value="7">7</option>   
                           </select>
                        </td>
                        <td><input type="text" name = "trip_cost" value = "<?php echo $value->trip_cost ?>"></td>
                      </tr>

                       <tr>
                        <td><label>Weight</label></td>
                     <td>
                            <select class="form-control" name="weight" id="weight">
                               <option value = "<?php echo $value->weight_id ?>" selected="selected"><?php echo $value->weight ?></option>
                               <?php foreach ($weight as $value1) { ?>
                               <option  value = "<?php echo $value1->id ?>">&nbsp;&nbsp;<?php echo $value1->weight ?></option>
                               <?php  } ?>    
                            </select>
                        </td>
                         <td><input type="text" name = "weight_cost" value = "<?php echo $value->weight_cost ?>"></td>
                       </tr>

                       <tr>
                        <td><label>No. of Labor</label></td>
                        <td>
                          <select class="form-control" name="labor" id="labor" >
                              <option value = "<?php echo $value->labor ?>" selected="selected"><?php echo $value->labor ?></option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                           </select>            
                        </td>
                        <td><input type="text" name = "labor_cost" value = "<?php echo $value->labor_cost ?>"></td>
                      </tr>

                </table>               
         </div>  
      </div>
   </div>
<?php endforeach; ?>

<div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Item List</h4>
            <hr>
                <table class = "table">
                  <tr>
                    <th>Item type</th>
                    <th>Quantity</th>
                    <th>Dimension</th>
                    <th>Price</th>
                  </tr>
                     <?php foreach ($individual_item_type as  $value): ?>             
                        <tr>
                        <td><?php echo $value->item_type ?></td>
                        <td><?php echo $value->qty_check ?></td>
                        <td><?php echo $value->dimension_check ?></td>
                        <td><input type="text" name = "item_type_cost[]" value = "<?php echo $value->item_type_cost ?>"></td>
                        <td><input type="hidden" name = "item_type_id[]" value = "<?php echo $value->item_type_id ?>"></td>
                      </tr> 
                   <?php endforeach; ?>          
                </table>      
         </div>  
 
         <div class="col-md-12 wrapper1">
               <input type = "submit" name = "submit_update" class="btn btn-primary btn-lg" value = "Update price">                   &nbsp;&nbsp;<input type = "submit" name = "submit_approved" class="btn btn-success btn-lg" value = "Approve">
                 &nbsp;&nbsp;   <a href="#spec" role="button"  class = "btn btn-success btn-lg" data-toggle="modal" data-load-remote="<?php echo base_url();?>driver_info/" data-remote-target="#spec .modal-body">Approved and Allocate&nbsp;<i class="fa fa-truck"></i></a>
                 &nbsp;&nbsp;<input type = "submit" name = "submit_reject" class="btn btn-danger btn-lg" value = "reject">
              <?php foreach ($individual as  $value): ?>
                       <span class="price_total">TOTAL:&nbsp;&nbsp;&nbsp;<?php 
                              $sub  = 
                              $value->destination_cost + 
                              $value->weight_cost +  
                              $value->labor_cost + 
                              $value->sumt + 
                              $value->vehicle_cost + 
                              $value->trip_cost;  

                              echo number_format($sub,2); 
                          ?></span>
             <?php endforeach; ?>  
         </div>
      </div>
   </div>
</form>

      <?php echo form_open_multipart('joblist_bank/add_allocate','id="form1"' );?>  
                  <!--modal-->
                  <div id="spec" class="modal modal2"  tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header header-spec">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-truck"></i>&nbsp;Allocate</h4>
                               <input type="hidden" name = "job_bank_id" class="form-control"  value = "<?php echo $value->job_request_id ?>"/>
                           </div>
                           <div class="modal-body">
                         
                           </div>
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name = "submit"><i class="fa fa-check"></i>&nbsp;&nbsp;allocate</button>
                              <button type="button" class="btn btn-primary1" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
                           </div>
                        </div>



                     </div>
                  </div>
               </form>     





