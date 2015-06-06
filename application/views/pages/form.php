<div class="content-wrapper">
   <div id="loading">
    <div id="loadingcontent">
        <p id="loadingspinner">
           Sending Job Bank - Please Wait
        </p>
    </div>
</div>
   <section class="content">
      <div class="row">
         <div class="col-md-6">
            <div class = "confirm-div"></div>
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">1. Pickup Details</h3>
               </div>
               <div class="box-body">
                  <?php echo form_open_multipart('form/add_job_request','id="form1"' );?>  
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "1" />       
                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>Company</label>
                     <input type="text" name = "company_client" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>Tel no.</label>
                     <input type="text" name = "tel_no" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email</label>
                     <input type="email" name = "email" class="form-control  required" id="exampleInputEmail1" placeholder="Enter email" required/>
                  </div>
                  <div class="form-group">
                     <label>Pickup Address</label>
                     <input type="text" name = "address" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
               </div>
            </div>
         </div><!--end of col-6-->


     <div class="col-md-6">
            <div class = "confirm-div"></div>
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">2. Delivery Details</h3>
               </div>
               <div class="box-body">
                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name_deliver" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>Company</label>
                     <input type="text" name = "company_client_deliver" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>Tel no.</label>
                     <input type="text" name = "tel_no_deliver" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email</label>
                     <input type="email" name = "email_deliver" class="form-control  required" id="exampleInputEmail1" placeholder="Enter email" required/>
                  </div>
                  <div class="form-group">
                     <label>Delivery Address</label>
                     <input type="text" name = "address_deliver" class="form-control  required" placeholder="Enter ..." required/>
                  </div>
               </div>
            </div>
         </div><!--end of col-6-->


         <div class="col-md-12">
            <div class = "confirm-div"></div>
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">3. Date and Time Decription</h3>
               </div>
               <div class="box-body">
                  <div class="form-group">
                     <label>Date</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right  required" id="datepicker" required/>
                     </div>
                  </div>
                  <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <label>Time</label>
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker  required" required/>
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  
          
               </div>
            </div>
         </div><!--end of col-6-->
      </div>
      
      <!--end of row--> 
      <div class="row">
         <!--/.col (right) -->
         <div class="box-body">
            <div class="panel  panel-info">
               <div class="panel-body">
                  <div class="box box-info">
                    <div class="box-header">
                     <h3 class="box-title">4. Costing Details</h3>
                   </div>
                    <table class="table table-bordered table-custom">
                     <tr>
                        <th>Destination</th>
                        <th>Weight</th>
                        <th>Dimension</th>
                        <th>No. of Labor</th>
                        <th>Sub Total</th>
                        <th>Gst</th>
                        <th>Total Cost</th>
                     </tr>

                     <tr>
                        <td>
                           <div class="col-md-9">
                              <div class="form-group">
                                 <label>Location</label>
                                 <select class="form-control  required" name="destination" id="destination" required>
                                    <option value="">-</option>
                                    <?php foreach ($from as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->from ?>&nbsp;-&nbsp;<?php echo $value->to ?></option>
                                    <?php  } ?>    
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label class = "costing">Cost</label>
                                 <select class="form-control sum" id="dropDown2" name = "destination_cost"  disabled>
                                    <option value="0">0</option>
                                    <?php foreach ($from as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->estimated_cost ?></option>
                                    <?php  } ?>   
                                 </select>
                              </div>
                           </div>
                        </td>

                        <td>
                           <div class="col-md-7">
                              <div class="form-group">
                                 <label>kg</label>
                                 <select class="form-control sum_all  required" name="weight" id="weight" required>
                                    <option value="">-</option>
                                    <?php foreach ($weight as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>">&nbsp;&nbsp;<?php echo $value->weight ?></option>
                                    <?php  } ?>    
                                 </select>
                              </div>
                           </div>

                           <div class="col-md-5">
                              <div class="form-group">
                                 <label class = "costing">Cost</label>
                                 <select class="form-control sum" name = "weight_cost" id="cost" disabled>
                                    <option value="0">0</option>
                                    <?php foreach ($weight  as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->cost ?></option>
                                    <?php  } ?>   
                                 </select>
                              </div>
                           </div>
                        </td>

                        <td>
                           <div class="col-md-7">
                              <div class="form-group">
                                 <label>measurement</label>
                                 <select class="form-control  required" name="dimension" id="dimension" required>
                                    <option value="">-</option>
                                    <?php foreach ($dimension as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>">&nbsp;&nbsp;<?php echo $value->dimension ?></option>
                                    <?php  } ?>    
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label class = "costing">Cost</label>
                                 <select class="form-control sum" name = "dimension_cost" id="dimension_cost" disabled>
                                    <option value="0">0</option>
                                    <?php foreach ($dimension  as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->cost ?></option>
                                    <?php  } ?>   
                                 </select>
                              </div>
                           </div>
                        </td>

                        <td>
                           <div class="col-md-7">
                              <div class="form-group">
                                 <label>No of labor</label>
                                 <select class="form-control cost-style  required" name="labor" id="labor" required>
                                    <option value="">-</option>
                                    <?php foreach ($labor as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>">&nbsp;&nbsp;<?php echo $value->labor ?></option>
                                    <?php  } ?>    
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label class = "costing">Cost</label>
                                 <select class="form-control sum" name = "labor_cost" id="labor_cost" disabled> 
                                    <option value="0">0</option>
                                    <?php foreach ($labor  as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->cost ?></option>
                                    <?php  } ?>   
                                 </select>
                              </div>
                           </div>
                        </td>

                      <td><input id = "subtotal" type="text" class="subtotal form-control" value="" disabled/></td>
                      <td><input id = "gst" type="text" class="gst form-control" value="" disabled/></td>
                      <td><input id = "sum" type="text" class="total form-control" value="" disabled/></td>
                     </tr>
                  </table>
                 </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">5. Description</h3>
               </div>
               <div class="box-body">
                  <div class='box'>
                     <div class='box-header'>
                        <label>Complete Job Details</label>
                        <div class="pull-right box-tools">
                           <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class='box-body pad'>
                        <textarea class="form-control myTextEditor details" name = "job_details" rows="3"></textarea>
                     </div>
                  </div>
                  <input type = "submit" name = "submit" class="btn  btn-success btn-lg" id = "submitbtn" value = "submit">
               </div>
            </div>
         </div>
         </form>
      </div>
   </section>
   <!-- /.content -->
</div>