<div class="content-wrapper">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">USER ACCOUNT LIST</div>
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     <?php echo form_open_multipart('manage_user_accounts/do_update_user');?>  
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
                              </div>
                                <!-- /.col-lg-6 (nested) -->
                                 <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Role:</label>
                                             <select name = "role_code" class="form-control" id="singleSelect">
                                                <option value="<?php echo $value->role_code?>">
                                                  <?php 
                                                  if($value->role_code =='1'){
                                                    echo "admin";
                                                   }else{
                                                    echo "surveyor";
                                                   }?>
                                                </option>
                                                <option value="1">Admin</option>
                                                <option value="2">Surveyor</option>
                                              </select>  
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