<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <!--/.col (right) -->
         <div class="box-body">
            <div class="panel  panel-info">
               <div class="panel-body">
                  <div class="box box-info">
                     <div class="box-header">
                        <h3 class="box-title">GENERATE JOB BANK HISTORY</h3>
                        <br><br>
                      </div>   
                       <?php echo form_open_multipart('generate_history/jobBank_generate');?>  
                           <div class=" col-md-4">
                              from<input type="text" class="form-control" id = "from" name = "from" autocomplete="off">
                           </div>
                           <div class=" col-md-4">
                              to<input type="text" class="form-control" id = "to" name = "to" autocomplete="off">
                           </div>
                             <div class=" col-md-4">
                             <input type = "submit" name = "submit" class="btn  btn-success btn-md generate-style-btn" value = "GENERATE">
                        </div>
                           <br><br><br>
                     </form>
                     <br>
                     <table class="table table-bordered" id = "resultTable">
                        <thead>
                           <tr>
                              <th style="width:100px">Job Bank id</th>
                              <th>Date Request</th>
                              <th>Client name</th>
                              <th>Company</th>
                              <th>Tel no.</th>
                              <th>Destination</th>
                              <th>Pickup Address</th>
                              <th>Details</th>
                              <th>Customer Sender</th>
                              <th>Cost</th>
                              <th>Remarks</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>                
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
</section>
</div>