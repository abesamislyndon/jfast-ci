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
         <select class="form-control sum" id="name" name = "name" onchange = "calljavascriptfunction()">
            <option value="0">-</option>
            <?php foreach ($driver_info as $value) { ?>
            <option  value = "<?php echo $value->id ?>" required><?php echo $value->driver_name ?></option>
            <?php  } ?>   
         </select>
      </div>
      <div class="form-group">
         <label>Company</label>
         <input type="text" name = "company" id = "company" class="form-control" placeholder="Enter ..." value = "" required>
      </div>
      <div class="form-group">
         <label>address</label>
         <input type="text" name = "address" id = "address" class="form-control" placeholder="Enter ..." value = "" required>
      </div>
          <div class="form-group">
         <label>Contact Number</label>
         <input type="text" name = "contact_num" id = "contact_num" class="form-control" placeholder="Enter ..." value = "" required>
      </div>
  </div>
</div>
