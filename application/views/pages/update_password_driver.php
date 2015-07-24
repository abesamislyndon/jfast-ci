<div class="content-wrapper">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">USER ACCOUNT LIST</div>
               <div class="panel-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <?php echo form_open_multipart('manage_user_accounts/do_update_user_pwd_driver');?>  
                             <div class="form-group">
                                <?php foreach ($individual as $value):?>
                                    <label>Old Password</label>
                                    <input type="hidden" name = "id" value = "<?php echo $value->id ?>">
                                    <input type = "password" name = "password"  id = "full_name" class="form-control" value = "">
                                </div>
                                  
                              </div>
                                <!-- /.col-lg-6 (nested) -->
                                 <div class="col-lg-6">
                                   <div class="form-group">
                                            <label>New Password</label>
                                            <input type = "password" name = "new_password"  id = "username" class="form-control" value = "">
                                        </div>
                                             <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type = "password" name = "confirm_password"  id = "username" class="form-control" value = "">
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