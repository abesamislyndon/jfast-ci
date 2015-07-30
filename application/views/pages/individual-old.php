<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-md-5">
           <div class = "confirm-div">
                  <p><?php echo $this->session->flashdata('msg'); ?></p>
               </div>
           
            <!-- general form elements disabled -->
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Pickup Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <?php foreach ($individual as  $value): ?>
                  <?php echo form_open_multipart('form/process_job_request');?>  
               
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "2" /> 

                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name" class="form-control" value = "<?php echo $value->full_name ?>"/>
                  </div>
                  <div class="form-group">
                     <label>Company</label>
                     <input type="text" name = "company_client" class="form-control" value = "<?php echo $value->company_client ?>"/>
                  </div>
                  <div class="form-group">
                     <label>Tel no.</label>
                     <input type="text" name = "tel_no" class="form-control" value = "<?php echo $value->tel_no ?>"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->email ?>">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                     <input type="text" name = "address_pickup" class="form-control" value = "<?php echo $value->address_pickup ?>"/>
                  </div>
                
               </div>
          </div>


             <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Delivery Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name_deliver" class="form-control" value = "<?php echo $value->full_name_deliver ?>"/>
                  </div>
                  <div class="form-group">
                     <label>Company</label>
                     <input type="text" name = "company_client_deliver" class="form-control" value = "<?php echo $value->company_client_deliver ?>"/>
                  </div>
                  <div class="form-group">
                     <label>Tel no.</label>
                     <input type="text" name = "tel_no_deliver" class="form-control" value = "<?php echo $value->tel_no_deliver ?>"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" name = "email_deliver" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->email_deliver ?>">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                     <input type="text" name = "address_deliver" class="form-control" value = "<?php echo $value->address_deliver ?>"/>
                  </div>
                
               </div>
            </div>
         <!--************************************************end of pickup delivery *****************************-->   


          <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Date and time Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">      
                  <div class="form-group">
                     <label>Date</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right  required" id="datepicker" value = "<?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?>"/>
                     </div>
                  </div>
                  <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <label>Time</label>
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker  required" value = "<?php echo $value->time ?>"/>
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div><!--******** end of box body ****************-->
               <div class = "confirm-div">
                  <p><?php echo $this->session->flashdata('msg'); ?></p>
               </div>
            </div><!--end og box info-->

         </div><!--*********************************************end of column 5*********************************-->


         <div class="col-md-7">
                  <div class="box-header">
                        <h3 class="box-title1">Job Bank #: <?php echo $value->job_request_id; ?></h3>
                 </div>

            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Job Delivery Decription</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">

              <div class="panel  panel-info">
                        <div class="panel-heading">
                            Destination
                        </div>
                        <div class="panel-body">
                           <div class="col-md-10">
                              <div class="form-group">
                               <label>from</label>
                                <select class="form-control" name="destination" id="destination" >
                                  <option value = "<?php echo $value->destination_id ?>" selected="selected"><?php echo $value->destination ?></option>
                                  <?php foreach ($from as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>"><?php echo $value1->from ?>&nbsp;-&nbsp;<?php echo $value1->to ?></option>
                                     <?php  } ?>    
                                </select>
                              </div>
                           </div>
                        
                         <div class="col-md-2">
                           <div class="form-group">
                                <label>Cost</label>
                              <select class="form-control" id="dropDown2" name = "destination_cost">
                                  <option value = "<?php echo $value->destination_cost ?>" selected="selected"><?php echo $value->destination_cost ?></option>
                                  <?php foreach ($from as $value1) { ?>
                                       <option  value = "<?php echo $value1->id ?>"><?php echo $value1->estimated_cost ?></option>    
                                     <?php  } ?>   
                               </select>
                            </div>
                        </div>
                      </div><!--end of panel body-->
                  </div><!--end of panel info-->

                   <div class="panel  panel-info">
                        <div class="panel-heading">
                            Weight
                        </div>
                        <div class="panel-body">
                            <div class="col-md-10">
                               <div class="form-group">
                                <label>kg</label>
                                <select class="form-control" name="weight" id="weight">
                                   <option value = "<?php echo $value->weight_id ?>" selected="selected"><?php echo $value->weight ?></option>
                                  <?php foreach ($weight as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>">&nbsp;&nbsp;<?php echo $value1->weight ?></option>
                                     <?php  } ?>    
                                </select>
                              </div>
                           </div>
                        
                         <div class="col-md-2">
                           <div class="form-group">
                                <label>Cost</label>
                              <select class="form-control" name = "weight_cost" id="cost">
                                  <option value = "<?php echo $value->weight_cost ?>" selected="selected"><?php echo $value->weight_cost ?></option>
                                  <?php foreach ($weight  as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>"><?php echo $value1->cost ?></option>
                                     <?php  } ?>   
                               </select>
                            </div>
                        </div>
                      </div><!--end of panel body-->
                  </div><!--end of panel info-->


            
                <div class="panel  panel-info">
                        <div class="panel-heading">
                            Dimension
                        </div>
                        <div class="panel-body">
                            <div class="col-md-10">
                               <div class="form-group">
                                <label>measurement</label>
                                <select class="form-control" name="dimension" id="dimension">
                                 <option value = "<?php echo $value->dimension_id ?>" selected="selected"><?php echo $value->dimension ?></option>
                                  <?php foreach ($dimension as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>">&nbsp;&nbsp;<?php echo $value1->dimension ?></option>
                                     <?php  } ?>    
                                </select>
                              </div>
                           </div>
                        
                         <div class="col-md-2">
                           <div class="form-group">
                                <label>Cost</label>
                              <select class="form-control" name = "dimension_cost" id="dimension_cost">
                                  <option value = "<?php echo $value->dimension_cost ?>" selected="selected"><?php echo $value->dimension_cost ?></option>
                                  <?php foreach ($dimension  as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>"><?php echo $value1->cost ?></option>
                                     <?php  } ?>   
                               </select>
                            </div>
                        </div>
                      </div><!--end of panel body-->
                  </div><!--end of panel info-->


                  <div class="panel  panel-info">
                        <div class="panel-heading">
                           Labor
                        </div>
                        <div class="panel-body">
                            <div class="col-md-10">
                               <div class="form-group">
                                <label>No of labor</label>
                                <select class="form-control" name="labor" id="labor">
                                  <option value = "<?php echo $value->labor_id ?>" selected="selected"><?php echo $value->labor ?></option>
                                  <?php foreach ($labor as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>">&nbsp;&nbsp;<?php echo $value1->labor ?></option>
                                     <?php  } ?>    
                                </select>
                              </div>
                           </div>
                        
                         <div class="col-md-2">
                           <div class="form-group">
                                <label>Cost</label>
                                 <select class="form-control" name = "labor_cost" id="labor_cost">
                                    <option value = "<?php echo $value->labor_cost ?>" selected="selected"><?php echo $value->labor_cost ?></option>
                                     <?php foreach ($labor  as $value1) { ?>
                                     <option  value = "<?php echo $value1->id ?>"><?php echo $value1->cost ?></option>
                                     <?php  } ?>   
                               </select>
                            </div>
                        </div>
                      </div><!--end of panel body-->
                  </div><!--end of panel info-->


                  <div class="form-group">
                     <label>Estimate Cost&nbsp;&nbsp;&nbsp;&nbsp;<p style = "color:red;">GST&nbsp;&nbsp;<?php $sub = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost; echo $gst = (7 * $sub) / 100; ?>&nbsp;sgd</p></label>
                     <input type="text" name = "price" class="form-control" value = "<?php $sub = $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost; $gst = (7 * $sub) / 100; echo number_format($gst + $sub,2); ?>"/>
                  </div>
                  <div class='box'>
                     <div class='box-header'>
                          <div class="box-header">
                          <h3 class="box-title">Description Details</h3>
                       </div>
               
                        <div class="pull-right box-tools">
                           <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class='box-body pad'>
                       <textarea class="form-control myTextEditor details" name = "job_details" rows="3"><?php echo $value->job_details ?></textarea>
                     </div>
                  </div>
                  <?php endforeach; ?>
                   <div class="col-sm-12">
                     <p><input type = "submit" name = "submit_update" class="btn btn-primary btn-lg" value = "update">
                        &nbsp;&nbsp;<input type = "submit" name = "submit_approved" class="btn btn-success btn-lg" value = "Approve">
                        &nbsp;&nbsp;   <a href="#spec" role="button"  class = "btn btn-success btn-lg" data-toggle="modal" data-load-remote="<?php echo base_url();?>driver_info/" data-remote-target="#spec .modal-body">Approved and Allocate&nbsp;<i class="fa fa-truck"></i></a>
                        &nbsp;&nbsp;<input type = "submit" name = "submit_reject" class="btn btn-danger btn-lg" value = "reject">
                     </p>
                  </div>
                  </form>
               </div>

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
                              <button type="submit" class="btn btn-primary" name = "approvedAllocate"><i class="fa fa-check"></i>&nbsp;&nbsp;allocate</button>
                              <button type="button" class="btn btn-primary1" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>   
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!--/.col (right) -->
      </div>
      <!--/.col (right) -->
   </section>
   <!-- /.content -->
</div>
