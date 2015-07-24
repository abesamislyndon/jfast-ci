<div class="content-wrapper">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">USER ACCOUNT LIST</div>
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     <?php echo form_open_multipart('manage_user_accounts/do_update_user_driver');?>  
                                   <div class="form-group">
                                      <?php foreach ($individual as $value):?>
                                        <label>Full name</label>
                                        <input type="hidden" name = "id" value = "<?php echo $value->id ?>">
                                        <input type = "text" name = "full_name"  id = "full_name" class="form-control" value = "<?php echo $value->full_name ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>username</label>
                                        <input type = "text" name = "username"  id = "username" class="form-control" value = "<?php echo $value->username ?>">
                                        </div>

                                       <div class="form-group">
                                        <label>Company</label>
                                        <input type = "text" name = "company"  id = "company" class="form-control" value = "<?php echo $value->company ?>">
                                        </div>

                                        <div class="form-group">
                                        <label>Address</label>
                                        <input type = "text" name = "address"  id = "company" class="form-control" value = "<?php echo $value->address ?>">
                                        </div>


                                        <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type = "text" name = "contact_no"  id = "company" class="form-control" value = "<?php echo $value->contact_no ?>">
                                        </div>
                                </div>
                   
                                 <?php endforeach; ?> 
                            </div><!--end of row-->
                             <div class = "submit_container">
                                <input type = "submit" value ="update" name = "submit" class = "submit">
                            </div>
                    </form>
                        </div><!--end of panel body-->
            </form>
        </div> <!--end of panel body-->
   </section>
</div> <!--end of panel body-->