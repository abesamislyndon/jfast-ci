<div class = "confirm-div"></div>
<?php echo validation_errors(); ?>
<div class="row">
   <div class="col-md-12 margin-bottom-15">
         <?php foreach ($weight_details as $value) { ?>
         <div class="form-group">
           <input type="hidden" name = "id"  class="form-control" placeholder="Enter ..." value = "<?php echo $value->id; ?>" required>
           <label>weight</label>
           <input type="text" name = "weight" class="form-control" placeholder="Enter ..." value = "<?php echo $value->weight; ?>" required>
         </div>
          <?php  } ?>   
  </div>
        
</div>
