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
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "job_request_id" class="form-control" value = "<?php echo $value->job_request_id ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "2" />       
                  <div class="form-group">
                     <label>Contact Person (Full name)</label>
                     <input type="text" name = "full_name" class="form-control" value = "<?php echo $value->full_name ?>"/>
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
         <!--end of column 5-->
         <div class="col-md-7">
            <div class="box box-info">
               <div class="box-body">
                  <table class="table table-bordered table-custom">
                     <label>Complete Summary</label>
                     <tr>
                        <th>Destination</th>
                        <th>Weight</th>
                        <th>Dimension</th>
                        <th>No. of Labor</th>
                        <th>Total Cost</th>
                     </tr>
                     <tr>
                        <td><?php echo $value->destination ?></td>
                        <td><?php echo $value->weight ?></td>
                        <td><?php echo $value->dimension ?></td>
                        <td><?php echo $value->labor ?></td>
                        <td><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                     </tr>
                  </table>
                  <hr>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Complete address</label>
                     <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value = "<?php echo $value->address ?>">
                  </div>
                  <hr>
                  <div class='box'>
                     <div class='box-header'>
                        <label>Complete Job Details</label>
                        <div class="pull-right box-tools">
                           <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <div class='box-body pad'>
                        <textarea class="textarea" name = "job_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value = ""><?php echo $value->job_details ?></textarea>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <div class="col-sm-7">
                     <a href="#spec" role="button"  class = "btn btn-success btn-lg" data-toggle="modal" data-load-remote="<?php echo base_url();?>driver_info" data-remote-target="#spec .modal-body">Allocate&nbsp;<i class="fa fa-truck"></i></a>
                  </div>
                  <div class="col-sm-4">
                  </div>

                  <!--modal-->
               
                   <div id="spec" class="modal modal2"  tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header header-spec">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-truck"></i>&nbsp;Allocate</h4>
                                 </div>
                                 <div class="modal-body"></div>
                                 <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name = "submit" value = "add_qty"><i class="fa fa-check"></i>&nbsp;&nbsp;add quantity</button>
                                    <button type="button" class="btn btn-primary1" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
                              </div>
                              </div>
                           </div>
                        </div>

               </div>
               <!--end of box body-->
            </div>
            <!--end of box info-->
         </div>
         <!--end of col-sm-7-->
      </div>
      <!--end of row upper part-->
   </section>
</div>
<!--end of content wrapper-->