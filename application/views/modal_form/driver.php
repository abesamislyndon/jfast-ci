<?php echo validation_errors(); ?>
<div class="row">
   <div class="col-md-12 margin-bottom-15">
      <?php foreach ($driver_details as $value) { ?>
      <div class="form-group">
         <label>Driver Name</label>
         <input type="hidden" name = "id" id = "company" class="form-control" placeholder="Enter ..." value = "<?php echo $value->id  ?>" required>
         <input type="text" name = "driver_name" id = "company" class="form-control" placeholder="Enter ..." value = "<?php echo $value->driver_name  ?>" required>
      </div>
      <div class="form-group">
         <label>Company</label>
         <input type="text" name = "company" id = "company" class="form-control" placeholder="Enter ..." value = "<?php echo $value->company  ?>" required>
      </div>
      <div class="form-group">
         <label>address</label>
         <input type="text" name = "address" id = "address" class="form-control" placeholder="Enter ..." value = "<?php echo $value->address  ?>" required>
      </div>
          <div class="form-group">
         <label>Contact Number</label>
         <input type="text" name = "contact_num" id = "contact_num" class="form-control" placeholder="Enter ..." value = "<?php echo $value->contact_num  ?>" required>
      </div>
          <?php } ?>
  </div>
</div>
