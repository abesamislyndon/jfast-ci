<div class = "col-md-12 confirm-div"></div>
<div class="content-wrapper">
       <section class="content">
          <div class="row">
            <div class="col-md-12">
  
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">USER LIST ACCOUNT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-custom">
               <thead>
                 <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Handphone Number</th>
                    <th>Fax Number</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                 </tr>
              </thead>
                 <tbody>
                   <?php if (isset($list) & ($list <> NULL)) {?>  
                      <?php foreach ($list as $individual):?>   
                        <tr>
                            <td ><?php echo $individual->full_name?></td>
                            <td ><?php echo $individual->username?></td>
                            <td ><?php echo $individual->company?></td>
                            <td ><?php echo $individual->address?></td>
                            <td ><?php echo $individual->contact_no?></td>
                            <td ><?php echo $individual->hp_no?></td>
                            <td ><?php echo $individual->fax_no?></td>
                            <td ><?php echo $individual->email?></td>
                            <?php if($individual->role_code == "1"){ ?>
                                <td>Admin</td>    
                             <?php }elseif($individual->role_code == "2"){ ?>
                                <td>Regular Customer</td> 
                            <?php }else{ ?>
                                <td>Driver</td> 
                            <?php } ?>
                            <td>
                              <div class="btn-group pull-right">
                                   <button type="button" class="button3 dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="<?php echo base_url();?>manage_user_accounts/update_user/<?php echo $individual->id?>" role="button"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Edit Username</a></li>
                                      <li><a href="<?php echo base_url();?>manage_user_accounts/update_user_pwd/<?php echo $individual->id?>" role="button"><i class="fa fa-key"></i></i>&nbsp;&nbsp;Edit Password</a></li>
                                      <li><a href="<?php echo base_url();?>manage_user_accounts/del_user/<?php echo $individual->id?>" class  =  "delete_item" ><i class="fa fa-trash-o"></i>&nbsp;&nbsp;Delete</a></li>
                                    </ul>
                              </div>
                           </td>
                         </tr>
                       <?php endforeach;?>
                     <?php }?>
                  </tbody>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>