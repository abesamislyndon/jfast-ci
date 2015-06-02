
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
      
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                  

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
                              </tr>
                        </thead>
                         <?php if($result == true){ ?>
                              <?php foreach($result as $value): ?>
                                  <tr>
                                     <td><?php echo $value->job_request_id?></td>
                                     <td><?php $day = date('l', strtotime($value->date_request));$month = date(' F j, Y',strtotime($value->date_request)); echo $month; ?></td>
                                     <td>
                                          <ul class = "details">
                                           <li><b>Client name</b>&nbsp;<?php echo $value->full_name?></li>
                                           <li><b>Company</b>&nbsp;<?php echo $value->company_client?></li>
                                           <li><b>Tel. No.</b>&nbsp;<?php echo $value->tel_no?></li>
                                        </ul>
                                     </td>
                                     <td>
                                        <ul class = "details">
                                           <li><b>Destination</b>&nbsp;<?php echo $value->destination?></li>
                                           <li><b>pickup Address</b>&nbsp;<?php echo $value->address?></li>
                                        </ul>
                                     </td>
                                     <td>
                                        <ul class = "details">
                                           <li><b>Time:</b>&nbsp;<?php echo $value->time?></li>
                                           <li><b>Weight:</b>&nbsp;<?php echo $value->weight?></li>
                                           <li><b>Dimension:</b>&nbsp;<?php echo $value->dimension?></li>
                                           <li><b>No. of Labor:</b>&nbsp;<?php echo $value->labor?></li>
                                        </ul>
                                     </td>
                                     <td><?php echo $value->sender?></td>
                                     <td><?php echo $value->destination_cost + $value->weight_cost +  $value->labor_cost + $value->dimension_cost ?></td>
                                         <td class = "remarks"><br>
                                           <?php
                                             if($value->status == 1) {
                                               echo 'pending job bank for approval';
                                             }elseif($value->status == 2){
                                               echo 'pending job bank for allocate' ;
                                             }elseif ($value->status == 3) {
                                              echo 'ongoing job'; 
                                             }elseif ($value->status == 4) {
                                              echo 'pending for checkout for invoice'; 
                                             }else{
                                              echo $value->remarks;
                                             }
                                           ?>
                                     </td>
                                  </tr>
                             <?php  endforeach; 
                               }else{?>
                           <tr>
                             <td colspan = "9" class = "no-result">NO RESULT</td>
                            
                           </tr>
                        <?php }?>
                     </table>



                    </div><!-- /.col -->
              
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
          
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

      
     
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2015 JFAST COURIER  AND TRANSPORTATION PTE LTD</a>.</strong> All rights reserved.
      </footer>

    
      <div class='control-sidebar-bg'></div>



