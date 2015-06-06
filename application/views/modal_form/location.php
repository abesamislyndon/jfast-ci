<div class = "confirm-div"></div>
<?php echo validation_errors(); ?>
<div class="row">
   <div class="col-md-12 margin-bottom-15">
         <?php foreach ($location_details as $value) { ?>
         <div class="form-group">
                <input type="hidden" name = "id"  class="form-control" placeholder="Enter ..." value = "<?php echo $value->id; ?>" required>
       
           <label>From</label>
           <input type="text" name = "from" class="form-control" placeholder="Enter ..." value = "<?php echo $value->from; ?>" required>
         </div>

         <div class="form-group">
           <label>To</label>
           <input type="text" name = "to" class="form-control" placeholder="Enter ..." value = "<?php echo $value->to; ?>" required>
         </div>

         <div class="form-group">
           <label>Cost</label>
           <input type="text" name = "estimated_cost"  class="form-control" placeholder="Enter ..." value = "<?php echo $value->estimated_cost; ?>" required>
         </div>


          <?php  } ?>   
  </div>
        
</div>
