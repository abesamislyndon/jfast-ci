<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-md-5">
            <!-- general form elements disabled -->
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title">Information Details</h3>
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
                     <label>Date</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name = "date_request" class="form-control pull-right" id="datepicker" value = "<?php echo $value->date_request ?>"/>
                     </div>
                  </div>
           
                  <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <label>Time</label>
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker" value = "<?php echo $value->time ?>"/>
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class = "confirm-div">
                  <p><?php echo $this->session->flashdata('msg'); ?></p>
               </div>
            </div>
         </div>


         <div class="col-md-7">
            <!-- general form elements disabled -->
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
                     <label>Estimate Cost</label>
                     <input type="text" name = "price" class="form-control" value = "<?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?>"/>
                  </div>
                  <div class='box'>
                     <div class='box-header'>
                        <label>Complete Job Details</label>
                        <div class="pull-right box-tools">
                           <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class='box-body pad'>
                        <textarea class="textarea" name = "job_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value = ""><?php echo $value->job_details ?></textarea>
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
