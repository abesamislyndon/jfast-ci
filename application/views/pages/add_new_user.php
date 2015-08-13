 <div class = "col-md-12 confirm-div"></div>
<div class="content-wrapper">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">USER ACCOUNT LIST</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo form_open_multipart('manage_user_accounts/do_add_user');?>
                            <div class="form-group">
                            <label>Full name</label>
                            <input type = "text" name = "full_name"  id = "full_name" class="form-control">
                            </div>
                                    
                            <div class="form-group">
                            <label>Company</label>
                            <input type = "text" name = "company"  id = "full_name" class="form-control">
                            </div>

                            <div class="form-group">
                            <label>Address</label>
                            <input type = "text" name = "address"  id = "full_name" class="form-control">
                            </div>  

                            <div class="form-group">
                            <label>Contact Number</label>
                            <input type = "text" name = "contact_no"  id = "full_name" class="form-control">
                            </div> 

                             <div class="form-group">
                            <label>Hand Phone</label>
                            <input type = "text" name = "hp_no"  id = "full_name" class="form-control">
                            </div> 

                             <div class="form-group">
                            <label>Fax Number</label>
                            <input type = "text" name = "fax_no"  id = "full_name" class="form-control">
                            </div> 

                             <div class="form-group">
                            <label>Email</label>
                            <input type = "text" name = "email"  id = "full_name" class="form-control">
                            </div> 
                       </div>

                           
                            <div class="col-lg-6">
                             <div class="form-group">
                             <label>username</label>
                             <input type = "text" name = "username"  id = "username" class="form-control">
                             </div>
                          
                             <div class="form-group">
                             <label>password</label>
                             <input type = "password" name = "password"  id = "password" class="form-control">
                             </div>
                            
                             <div class="form-group">
                             <label>repeat password</label>
                             <input type = "password" name = "password1"  id = "password1" class="form-control">
                             </div>

                               <div class="form-group">
                                            <label>Role:</label>
                                            <select name = "role_code" class="form-control" id="singleSelect">
                                                <option value="" disabled selected></option>
                                                <option value="1">Administrator</option>
                                                <option value="2">Regular Customer</option>
                                                <option value="3">Driver</option>
                                            </select>
                                        </div>     
                            </div>
                                </div><!--end of row-->
                              <div class = "submit_container">
                            <input type = "submit" value ="submit" name = "submit" class = "submit">
                       </div>
               </div> <!--end of panel body-->
            </form>
        </div> <!--end of panel body-->
   </section>
</div> <!--end of panel body-->
