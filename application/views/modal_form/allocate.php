
<div class="row">
   <div class="col-md-5 item-details-modal"> 
   </div>
   
   <div class="col-md-7">
   </div>
 </div>

 <div class = "confirm-div"></div>
  <?php echo validation_errors(); ?>
     <div class="row">
     <div class="col-md-12 margin-bottom-15">
      <div class="form-group">
                     <label>Contact Person</label>
                       <select class="form-control sum" id="dropDown2" name = "destination_cost">
                                    <option value="0">-</option>
                                    <?php foreach ($driver_info as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                    <?php  } ?>   
                                 </select>
                  </div>

     </div><!--end of margin-bottom-15-->
    </div><!--end of -->
  </div><!--end of template-container-->

