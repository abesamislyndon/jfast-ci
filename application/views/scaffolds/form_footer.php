    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url();?>asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url();?>asset/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url();?>asset/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url();?>asset/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url();?>asset/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>asset/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>asset/dist/js/demo.js" type="text/javascript"></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

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
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>

           <script type="text/javascript"> 
    $(document).ready(function(){
     $('confirm.div').hide();
      <?php if($this->session->flashdata('msg')){ ?>
      $('.confirm-div').html('<?php echo "<p "."&nbsp;&nbsp;&nbsp;".$this->session->flashdata('msg');"</p>" ?>').fadeIn( "slow").fadeOut(4500);
      });
      <?php } ?>
   </script>
  </body>
</html>
