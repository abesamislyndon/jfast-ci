<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">INCOMING JOB BANK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-custom">
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
                      <th>Action</th>
                    </tr>
                    <?php if (isset($job_list_incoming) & ($job_list_incoming <> NULL)) {?>  
                   <?php foreach ($job_list_incoming as $value):?>
                    <tr>
                      <td><?php echo $value->job_request_id?></td>
                      <td><?php echo $value->date_request?></td>
                      <td><?php echo $value->full_name?></td>
                      <td><?php echo $value->full_name?></td>
                      <td><?php echo $value->tel_no?></td>
                      <td><?php echo $value->destination?></td>
                      <td><?php echo $value->address?></td>
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
                      <td><a href="<?php echo base_url();?>joblist_bank/individual/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom">process</span></a></td>
                    </tr>
                    <?php endforeach; ?>
                      <?php }?>               
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   <?php echo $links; ?>
                </div>
              </div><!-- /.box -->

           </div>
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>