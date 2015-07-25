<div class="content-wrapper">
   <div id="loading">
    <div id="loadingcontent">
        <p id="loadingspinner">
           Sending Job Bank - Please Wait
        </p>
    </div>
  </div>

<?php echo form_open_multipart('form/add_job_request','id="form1"' );?>  
     <input type="hidden" name = "sender" class="form-control" value = "<?php echo $_SESSION['logged_in']['full_name']; ?>" />   
      <input type="hidden" name = "id" class="form-control" value = "<?php echo $_SESSION['logged_in']['id']; ?>" />              
      <input type="hidden" name = "status" class="form-control" value = "1" />       

<div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Pickup Details</h4>
            <hr>
              <div class="form-group">
                  <div class="col-md-2">
                    <label>Contact Person:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                          <input type="text" name = "full_name" class="form-control lg required" placeholder="Enter ..." required/>
                      
                  </div>
               </div>

                   <div class="form-group">
                  <div class="col-md-2">
                    <label>Company:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                         <input type="text" name = "company_client" class="form-control lg required" placeholder="Enter ..." required/>
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Tel no:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                           <input type="text" name = "tel_no" class="form-control lg required" placeholder="Enter ..." required/>  
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Email:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                        <input type="email" name = "email" class="form-control lg required" id="exampleInputEmail1" placeholder="Enter email" required/>
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Pickup Address:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                      <input type="text" name = "address_pickup" class="form-control lg required" placeholder="Enter ..." required/>
                  </div>
               </div>
         </div>
      </div>
   </div>


<div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Delivery Details</h4>
            <hr>
              <div class="form-group">
                  <div class="col-md-2">
                    <label>Contact Person:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                           <input type="text" name = "full_name_deliver" class="form-control  lg required" placeholder="Enter ..." required/>
                  </div>
               </div>

                   <div class="form-group">
                  <div class="col-md-2">
                    <label>Company:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                       <input type="text" name = "company_client_deliver" class="form-control lg required" placeholder="Enter ..." required/>     
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Tel no:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                     <input type="text" name = "tel_no_deliver" class="form-control lg  required" placeholder="Enter ..." required/>
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Email:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                      <input type="email" name = "email_deliver" class="form-control lg required" id="exampleInputEmail1" placeholder="Enter email" required/>
                  </div>
               </div>


              <div class="form-group">
                  <div class="col-md-2">
                    <label>Deliver Address:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                      <input type="text" name = "address_deliver" class="form-control lg required" placeholder="Enter ..." required/>
                  </div>
               </div>
         </div>
      </div>
   </div>

 <!-- **************************** type of vehicle ************************************************ --> 

   <div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Type of Vehicle</h4>
            <hr>

         <div class="form-group">
                  <div class="col-md-2">
                    <label>Deliver Address:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-10">
                     <input class="form-control input-md lg" placeholder="Email" type="text">        
                  </div>
               </div>
        </div>
   </div>
   </div>

   
  <!-- **************************** delivery details ************************************************ --> 
    
   <div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Delivery Details</h4>
            <hr>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>Date:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                      <div class="input-group">
                        <input type="text" name = "date_request" class="form-control lg required" id="datepicker" required/>
                         <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                           </div>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>Time:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                       <div class="bootstrap-timepicker">
                     <div class="form-group">
                        <div class="input-group">
                           <input type="text" name = "time" class="form-control timepicker lg required" required/>
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                        </div>
                     </div>
                  </div>      
                  </div>
               </div>
            </div>

                 <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>Destination:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                      <select class="form-control  required" name="destination" id="destination" required>
                                    <option value="">-</option>
                                    <?php foreach ($from as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>"><?php echo $value->from ?>&nbsp;-&nbsp;<?php echo $value->to ?></option>
                                    <?php  } ?>    
                                 </select>      
                  </div>
               </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>No. of trips:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                       <select class="form-control  lg" name="no_trips" id="destination" required>
                         <option value="" selected>-</option>
                         <option value="">1</option>
                         <option value="">2</option>
                         <option value="">3</option>
                         <option value="">4</option>
                         <option value="">5</option>
                         <option value="">6</option>
                         <option value="">7</option>
                     </select>   
                  </div>
               </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>Weight:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                       <select class="form-control sum_all  required" name="weight" id="weight" required>
                         <option value="">-</option>
                         <?php foreach ($weight as $value) { ?>
                         <option  value = "<?php echo $value->id ?>">&nbsp;&nbsp;<?php echo $value->weight ?></option>
                         <?php  } ?>    
                     </select>      
                  </div>
               </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-3">
                    <label>No of Labor:</label> &nbsp; &nbsp;     
                  </div>
                   <div class="col-md-9">
                     <select class="form-control lg cost-style  required" name="labor" id="labor" required>
                                    <option value="">-</option>
                                    <?php foreach ($labor as $value) { ?>
                                    <option  value = "<?php echo $value->id ?>">&nbsp;&nbsp;<?php echo $value->labor ?></option>
                                    <?php  } ?>    
                                 </select>    
                  </div>
               </div>
            </div>


         </div>
      </div>
   </div>

   <!-- **************************** checkbox ************************************************ -->

  <div class="container">
   <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Item Details</h4>
            <hr>

        <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "item_type[]" value = "box" class = "ck">&nbsp;&nbsp;&nbsp;BOX</label>    
               </div>
               <div class="select-box" id = "show">
                  <select name="qty_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                  </select>
                  <select name="dimension_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="less than 50 x 50 x 50">less than 50 x 50 x 50</option>
                      <option value="more than than 50 x 50 x 50">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>

 
         <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "item_type[]"  value = "parcel" class = "ck1">&nbsp;&nbsp;&nbsp;PARCEL</label>    
               </div>
               <div class="select-box" id = "show1">
                    <select name="qty_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                  </select>
                  <select name="dimension_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="less than 50 x 50 x 50">less than 50 x 50 x 50</option>
                      <option value="more than than 50 x 50 x 50">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>

       <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "item_type[]" value = "pallet" class = "ck2">&nbsp;&nbsp;&nbsp;PALLET</label>    
               </div>
               <div class="select-box" id = "show2">
                   <select name="qty_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                  </select>
                    <select name="dimension_check[]" id="">
                      <option value="none" selected>-</option>
                      <option value="less than 50 x 50 x 50">less than 50 x 50 x 50</option>
                      <option value="more than than 50 x 50 x 50">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>

       <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "box" class = "ck3">&nbsp;&nbsp;&nbsp;BAG</label>    
               </div>
               <div class="select-box" id = "show3">
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      <option value="">5</option>
                      <option value="">6</option>
                      <option value="">7</option>
                  </select>
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">less than 50 x 50 x 50</option>
                      <option value="">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>

       <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "box" class = "ck4">&nbsp;&nbsp;&nbsp;CARTON</label>    
               </div>
               <div class="select-box" id = "show4">
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      <option value="">5</option>
                      <option value="">6</option>
                      <option value="">7</option>
                  </select>
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">less than 50 x 50 x 50</option>
                      <option value="">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>

      <div class="col-md-2">    
               <div class="form-group">
                  <label><input type="checkbox" name = "box" class = "ck5">&nbsp;&nbsp;&nbsp;ITEM</label>    
               </div>
               <div class="select-box" id = "show5">
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      <option value="">5</option>
                      <option value="">6</option>
                      <option value="">7</option>
                  </select>
                  <select name="" id="">
                      <option value="" selected>-</option>
                      <option value="">less than 50 x 50 x 50</option>
                      <option value="">more than than 50 x 50 x 50</option>
                  </select>
               </div>
        </div>
   </div>

 <!-- **************************** remarks ************************************************ -->   

   <div class="container">
     <div class="row">
      <div class="col-md-12 wrapper1">
            <h4>Remarks</h4>
            <hr>

              <div class="form-group">
                  <div class="col-md-12">
                        <div class='box-body pad'>
                        <textarea class="form-control myTextEditor details" name = "job_details" rows="3"></textarea>
                     </div>   
                  </div> 
               </div>
           
           <div class="col-md-12"> 
             <div class="box-body">
               <br><br>
               <input type = "submit" name = "submit" class="btn  btn-success btn-lg" id = "submitbtn" value = "submit">
               <br><br>
             </div>
           </div>   
        </div>
      </div>
   </div>

         </form>
   
   </div>
</div>

