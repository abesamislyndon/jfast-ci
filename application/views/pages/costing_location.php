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
                  <?php echo form_open_multipart('costing_attributes/add_location','id="form1"' );?>  
                  <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
                  <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
                  <input type="hidden" name = "status" class="form-control" value = "1" />       
                  <div class="form-group">
                     <label>From</label>
                     <input type="text" name = "from_destination" class="form-control" placeholder="Enter ..." required/>
                  </div>
                  <div class="form-group">
                     <label>To</label>
                     <input type="text" name = "to_destination" class="form-control" placeholder="Enter ..." required/>
                  </div>
               
                  <input type = "submit" name = "submit" class="btn  btn-success btn-lg" value = "submit">
                  </form> 
               </div>
               <!-- /.box-body -->

               <?php echo form_open_multipart('costing_attributes/update_location','id="form1"' );?>  
                  <!--modal-->
                  <div id="spec" class="modal modal2"  tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header header-spec">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"> <i class="fa fa-pencil-square-o"></i>&nbsp;Update Destination Details</h4>
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
                  <h3 class="box-title">MANAGE LOCATION</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table class="table table-bordered table-custom">
                     <label>Destination List</label>
                     <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Update</th>
                        <th>Delete</th>
                     </tr>
                     <?php foreach($location_details as $value): ?>
                     <tr>
                        <td><?php echo $value->from_destination; ?></td>
                        <td><?php echo $value->to_destination; ?></td>
                        <td><a href="#spec" role="button"  class="badge bg-blue custom" data-toggle="modal" data-load-remote="<?php echo base_url();?>costing_attributes/modal_location/<?php echo $value->id; ?>" data-remote-target="#spec .modal-body"> <i class="fa fa-pencil-square-o"></i></a>
                        </td>
                        <td><a href="<?php echo base_url();?>costing_attributes/delete_location/<?php echo $value->id ?>" onclick="return confirm('Are you sure you want to Delete?');"><span class="badge bg-red custom"><i class="fa fa-trash-o"></i></span></a></td>
                     </tr>
                     <?php endforeach; ?>  
                  </table>
               </div> <!-- /.box-body -->
            </div><!-- /.box -->
         </div>

      </div><!--/.col (right) -->

<script type="text/javascript">
(function ($) {
$(document).ready(function(){
$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",
  {
    tags: "awesome",
    tagmode: "any",
    format: "json"
  },
  function(data) {
    $.each(data.items, function(i,item){
      $("<img/>").attr("src", item.media.m).appendTo("#flickr-images");
      if ( i == 3 ) return false;
    });
  });
});
})(jQuery);
</script>
<div id="flickr-images"></div>


   </section>
   <!-- /.content -->
</div>