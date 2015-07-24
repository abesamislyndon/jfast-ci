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
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/stacktable.js"></script>
 

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

      <script type="text/javascript" language="javascript">
     $(document).ready(function() {
              $( "#from" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                changeYear:true,
                yearRange: "2005:2015",
                format: "yy-mm-dd",
                autoclose: true,
                todayHighlight: true,
                onClose: function( selectedDate ) {
                  $( "#to" ).datepicker( "option", "minDate", selectedDate );
                }
              });
              $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths:1,
                changeYear:true,
                yearRange: "2005:2015",
                 format: "yy-mm-dd",
                autoclose: true,
                todayHighlight: true,
                onClose: function( selectedDate ) {
                  jQuery( "#from" ).datepicker( "option", "maxDate", selectedDate );
                }
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
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/spin.js"></script>
<script>
$(document).ready(function() {
    $('#submitbtn').click(function(e) {
        var isValid = true;
        $('input[type="text"].required, select.required, email.required, textarea.required ').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid #e53935",
                    "background": "#ffebee",
                    "color":"#000"
                });
              $(this).attr("placeholder", "empty").addClass('empty1');
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        else 
                    $("#loading").fadeIn();
                var opts = {
                    lines: 12, // The number of lines to draw
                    length: 7, // The length of each line
                    width: 4, // The line thickness
                    radius: 10, // The radius of the inner circle
                    color: '#fff', // #rgb or #rrggbb
                    speed: 1, // Rounds per second
                    trail: 60, // Afterglow percentage
                    shadow: false, // Whether to render a shadow
                    hwaccel: false // Whether to use hardware acceleration
                };
                var target = document.getElementById('loading');
                var spinner = new Spinner(opts).spin(target);
    });
});
</script>

<script>
function goBack() {
    window.history.back();
}
</script>


<script>
  $(document).on('click', '#run', function(e) {
    e.preventDefault();
    $('#simple-example-table').stacktable({hideOriginal:true});
    $(this).replaceWith('<span>ran</span>');
  });
  $('#responsive-example-table').stacktable({myClass:'stacktable small-only'});
  $('#card-table').cardtable({myClass:'stacktable small-only' });
  $('#agenda-example').stackcolumns({myClass:'stacktable small-only' });
</script>


<script>
  $(function(){
      $('.ck , ck1').click(function(){
          if($('.ck:checked').length > 0){
               $('#show').show();
          }else{
               $('#show').hide(); 
          }
      });
      
      $('.ck1').click(function(){
           if($('.ck1:checked').length > 0){
               $('#show1').show();
            }else{
               $('#show1').hide(); 
          }
      });

      $('.ck2').click(function(){
           if($('.ck2:checked').length > 0){
               $('#show2').show();
            }else{
               $('#show2').hide(); 
          }
      });

      $('.ck3').click(function(){
           if($('.ck3:checked').length > 0){
               $('#show3').show();
            }else{
               $('#show3').hide(); 
          }
      });

      $('.ck4').click(function(){
           if($('.ck4:checked').length > 0){
               $('#show4').show();
            }else{
               $('#show4').hide(); 
          }
      });

      $('.ck5').click(function(){
           if($('.ck5:checked').length > 0){
               $('#show5').show();
            }else{
               $('#show5').hide(); 
          }
      });

  });
</script>
</body>
</html>
