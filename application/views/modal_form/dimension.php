<div class = "confirm-div"></div>
<?php echo validation_errors(); ?>
<div class="row">
   <div class="col-md-12 margin-bottom-15">
         <?php foreach ($dimension_details as $value) { ?>
         <div class="form-group">
           <input type="hidden" name = "id"  class="form-control" placeholder="Enter ..." value = "<?php echo $value->id; ?>" required>
           <label>Dimension</label>
           <input type="text" name = "dimension" class="form-control" placeholder="Enter ..." value = "<?php echo $value->dimension; ?>" required>
         </div>

         <div class="form-group">
           <label>Cost</label>
           <input type="text" name = "cost"  class="form-control" placeholder="Enter ..." value = "<?php echo $value->cost; ?>" required>
         </div>


          <?php  } ?>   
  </div>
        
</div>
