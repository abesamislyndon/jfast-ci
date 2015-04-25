<div class="content-wrapper">
       <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class = "confirm-div"></div>
          
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">JOB DELIVERY REQUEST</h3>
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
                      <th>Action</th>
                    </tr>
                   <?php foreach ($job_list_incoming as $value):?>
                    <tr>
                      <td><?php echo $value->job_request_id?></td>
                      <td><?php echo $value->date_request?></td>
                      <td><?php echo $value->full_name?></td>
                      <td><?php echo $value->tel_no?></td>
                      <td><?php echo $value->email?></td>
                      <td><?php echo $value->time?></td>
                      <td><?php echo $value->address_from?></td>
                      <td><?php echo $value->address_to?></td>
                      <td><?php echo $value->sender?></td>
                      <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <?php endforeach; ?>
                                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

           </div>
           </div><!--/.col (right) -->
        </section><!-- /.content -->
      </div>