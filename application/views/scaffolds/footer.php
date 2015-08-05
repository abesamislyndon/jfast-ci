      </div><!-- ./wrapper -->
  
    <script src="<?php echo base_url();?>asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='<?php echo base_url();?>asset/plugins/fastclick/fastclick.min.js'></script>
    <script src="<?php echo base_url();?>asset/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/stacktable.js"></script>
   
    <script src="<?php echo base_url();?>asset/dist/js/demo.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/app.js"></script>
    
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>

  <script type="text/javascript">
   $('[data-load-remote]').on('click',function(e) {
     e.preventDefault();
     var $this = $(this);
     var remote = $this.data('load-remote');
     if(remote) {
        $($this.data('remote-target')).load(remote);
    }
  });
 </script>
<!-- for auto populate for -->
 <script>  
        function calljavascriptfunction(){
          $.ajax({
             type : 'POST',
             data : 'name='+ $('#name').val(),
             url : '<?php echo base_url();?>driver_info/populate/',
             success : function(data){
               $('#address').val(data);
             }
         });

            $.ajax({
             type : 'POST',
             data : 'name='+ $('#name').val(),
             url : '<?php echo base_url();?>driver_info/populate1/',
             success : function(data){
               $('#company').val(data);
             }
         });

           $.ajax({
             type : 'POST',
             data : 'name='+ $('#name').val(),
             url : '<?php echo base_url();?>driver_info/populate2/',
             success : function(data){
               $('#contact_no').val(data);
             }
         });
        $.ajax({
               type : 'POST',
               data : 'name='+ $('#name').val(),
               url : '<?php echo base_url();?>driver_info/populate3/',
               success : function(data){
                 $('#driver_id').val(data);
               }
           });  
        }
</script>

  <script type="text/javascript">
            $('form#process2').submit(function(e){
                e.preventDefault();
                makeAjaxRequest1();
                return false;
            });

            function makeAjaxRequest1(){
                $.ajax({
                    url: '<?php echo base_url();?>search/result_jobBank',
                    type: 'get',
                    data: {name: $('input#search').val()},
                    success: function(response) {
                       $('table#resultTable tbody').html(response);
                    }
                });
            }
    </script>


  <script type="text/javascript">
            $('form#process1').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });

            function makeAjaxRequest(){
                $.ajax({
                    url: '<?php echo base_url();?>search/result_invoice',
                    type: 'get',
                    data: {name: $('input#search').val()},
                    success: function(response) {
                       $('table#resultTable tbody').html(response);
                    }
                });
            }
    </script>

<script>
    var deleteLink = document.querySelector('.delete');
    deleteLink.addEventListener('click', function(event) {
    event.preventDefault();
    var choice = confirm(this.getAttribute('data-confirm'));
  
    if (choice) {
    window.location.href = this.getAttribute('href');
    }
});
    
</script>


<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  var barChartData = {
    labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
    datasets : [
      {
        label: "My First dataset",
        fillColor: "rgba(198,40,40,0.1)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(198,40,40,0.1)",
        <?php foreach ($jan_reject as $value) { $jan =  $value->total; } ?>
        <?php foreach ($feb_reject as $value) { $feb =  $value->total; } ?>
        <?php foreach ($march_reject as $value) { $march =  $value->total; } ?>
        <?php foreach ($april_reject as $value) { $april =  $value->total; } ?>
        <?php foreach ($may_reject as $value) { $may =  $value->total; } ?>
        <?php foreach ($jun_reject as $value) { $jun =  $value->total; } ?>
        <?php foreach ($july_reject as $value) { $july =  $value->total; } ?>
        <?php foreach ($aug_reject as $value) { $aug =  $value->total; } ?>
        <?php foreach ($sept_reject as $value) { $sept =  $value->total; } ?>
        <?php foreach ($oct_reject as $value) { $oct =  $value->total; } ?>
        <?php foreach ($nov_reject as $value) { $nov =  $value->total; } ?>
        <?php foreach ($dec_reject as $value) { $dec =  $value->total; } ?>
        
        data: [<?php echo $jan; ?>,<?php echo $feb; ?>, <?php echo $march; ?>, <?php echo $april; ?>, <?php echo $may; ?>, <?php echo $jun; ?>, <?php echo $july; ?>,<?php echo $aug; ?>,<?php echo $sept; ?>,<?php echo $oct; ?>,<?php echo $nov; ?>, <?php echo $dec; ?>]
 
      },
 
      {
        label: "My Second dataset",
        fillColor: "rgba(0,200,83,0.2)",
        strokeColor: "rgba(0,191,165,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(0,200,83,0.2)",
        <?php foreach ($jan_aprov as $value) { $jan =  $value->total; } ?>
        <?php foreach ($feb_aprov as $value) { $feb =  $value->total; } ?>
        <?php foreach ($march_aprov as $value) { $march =  $value->total; } ?>
        <?php foreach ($april_aprov as $value) { $april =  $value->total; } ?>
        <?php foreach ($may_aprov as $value) { $may =  $value->total; } ?>
        <?php foreach ($jun_aprov as $value) { $jun =  $value->total; } ?>
        <?php foreach ($july_aprov as $value) { $july =  $value->total; } ?>
        <?php foreach ($aug_aprov as $value) { $aug =  $value->total; } ?>
        <?php foreach ($sept_aprov as $value) { $sept =  $value->total; } ?>
        <?php foreach ($oct_aprov as $value) { $oct =  $value->total; } ?>
        <?php foreach ($nov_aprov as $value) { $nov =  $value->total; } ?>
        <?php foreach ($dec_aprov as $value) { $dec =  $value->total; } ?>

        data: [<?php echo $jan; ?>,<?php echo $feb; ?>, <?php echo $march; ?>, <?php echo $april; ?>, <?php echo $may; ?>, <?php echo $jun; ?>, <?php echo $july; ?>,<?php echo $aug; ?>,<?php echo $sept; ?>,<?php echo $oct; ?>,<?php echo $nov; ?>, <?php echo $dec; ?>]
 
      }
    ]
  }
  
  window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx).Line(barChartData, {
      responsive : true,   bezierCurveTension : 0.3,
    });
  }
  </script>

<script>
function goBack() {
    window.history.back();
}
</script>

<script>
  $('#card-table').cardtable({myClass:'stacktable small-only' });
</script>
  </body>
</html>