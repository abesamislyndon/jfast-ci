<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">ALLOCATE APPROVED JOB BANK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-custom">
                    <tr>
                      <th style="width:100px">Job Bank id</th>
                       <th>Date Request</th>
                      <th>Client name</th>
                      <th>Tel no.</th>
                      <th>Email</th>
                      <th>Time</th>
                      <th>Address form</th>
                      <th>Address to</th>
                      <th>Sender</th>
                      <th>Cost</th>
                      <th>Action</th>
                    </tr>
                      <?php if (isset($allocate) & ($allocate <> NULL)) {?>  
                   <?php foreach ($allocate as $value):?>
                    <tr>
                      <td><?php echo $value->job_request_id?></td>
                      <td><?php echo $value->date_request?></td>
                      <td><?php echo $value->full_name?></td>
                      <td><?php echo $value->tel_no?></td>
                      <td><?php echo $value->email?></td>
                      <td><?php echo $value->time?></td>
                       <td><?php echo $value->destination?></td>
                      <td><?php echo $value->weight?></td>
                      <td><?php echo $value->sender?></td>
                      <td><?php echo $value->destination_cost + $value->weight_cost?></td>
                      <td><a href="<?php echo base_url();?>joblist_bank/individualAllocate/<?php echo $value->job_request_id ?>"><span class="badge bg-blue custom">view</span></a></td>
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