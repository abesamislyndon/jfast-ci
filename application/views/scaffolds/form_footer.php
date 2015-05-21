    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.1.3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>        
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src='<?php echo base_url();?>asset/plugins/fastclick/fastclick.min.js'></script>
    <script src="<?php echo base_url();?>asset/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/dist/js/demo.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


    <script type="text/javascript"> 
        $(function() {
        $('#destination').change(function(){
        $('#dropDown2').val(this.value);
        });
    });
        $(function() {
        $('#weight').change(function(){
        $('#cost').val(this.value);
        });
    });

   $(function() {
        $('#dimension').change(function(){
        $('#dimension_cost').val(this.value);
        });
    });


      $(function() {
        $('#labor').change(function(){
        $('#labor_cost').val(this.value);
        });
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


    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        //Money Euro
        $("[data-mask]").inputmask();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>


 <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datepicker').datepicker({
                     autoclose: true,
                     todayHighlight: true,
               
                });            
            });
   </script>

   <script type="text/javascript">

   $(document).on("change", "select", function() {
      var total = 0;
      $.each($(".sum") ,function() {
          total += +$(this).find('option:selected').text();
      });
       
      var gst =  (( 7 * total) / 100 );
      var grand_total = total + gst;
      $("#sum").val(grand_total);
      $("#gst").val(gst);
      $("#subtotal").val(total);
    });
   </script>

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
       $('#contact_num').val(data);
     }
 });


}
    </script>



  </body>
</html>
