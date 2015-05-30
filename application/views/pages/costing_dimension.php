<div class="content-wrapper">
   <section class="content">
      <div class="row">
    
         <div class="col-md-6">
            <div class = "confirm-div"></div>
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">ADD NEW </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <?php echo form_open_multipart('costing_attributes/add_dimension','id="form1"' );?>  
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "1" />       
                  <div class="form-group">
                     <label>dimension</label>
                     <input type="text" name = "dimension" class="form-control" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>Cost</label>
                     <input type="text" name = "cost" class="form-control" placeholder="Enter ..." required/>
                  </div>
                  <input type = "submit" name = "submit" class="btn  btn-success btn-lg" value = "submit">
                  </form> 
               </div>
               <!-- /.box-body -->

               <?php echo form_open_multipart('costing_attributes/update_dimension','id="form1"' );?>  
                  <!--modal-->
                  <div id="spec" class="modal modal2"  tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header header-spec">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"> <i class="fa fa-pencil-square-o"></i>&nbsp;Update Dimension Details</h4>
                           </div>
                           <div class="modal-body">
                         
                           </div>
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name = "submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Update</button>
                              <button type="button" class="btn btn-primary1" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>   
                 <!--end of modal-->

            </div><!-- /.box -->
         </div>

     <div class="col-md-6">
            <div class = "confirm-div"></div>
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">MANAGE DIMENSION</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table class="table table-bordered table-custom">
                     <label>Destination List</label>
                     <tr>
                        <th>Weight</th>
                        <th>Cost</th>
                        <th>Update</th>
                        <th>Delete</th>
                     </tr>
                     <?php foreach($dimension_details as $value): ?>
                     <tr>
                        <td><?php echo $value->dimension; ?></td>
                        <td><?php echo $value->cost; ?></td>
                        <td><a href="#spec" role="button"  class="badge bg-blue custom" data-toggle="modal" data-load-remote="<?php echo base_url();?>costing_attributes/modal_dimension/<?php echo $value->id; ?>" data-remote-target="#spec .modal-body"> <i class="fa fa-pencil-square-o"></i></a>
                        </td>
                        <td><a href="<?php echo base_url();?>costing_attributes/delete_dimension/<?php echo $value->id ?>" onclick="return confirm('Are you sure you want to Delete?');"><span class="badge bg-red custom"><i class="fa fa-trash-o"></i></span></a></td>
                     </tr>
                     <?php endforeach; ?>  
                  </table>
               </div> <!-- /.box-body -->
            </div><!-- /.box -->
         </div>

      </div><!--/.col (right) -->
   </section>
   <!-- /.content -->
</div>