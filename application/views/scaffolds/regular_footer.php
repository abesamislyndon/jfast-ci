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
    <script src="<?php echo base_url();?>asset/dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset/dist/js/demo.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/stacktable.js"></script>
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

  <script type="text/javascript">
            $('form#process_regular').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });

            function makeAjaxRequest(){
                $.ajax({
                    url: '<?php echo base_url();?>search/result_jobBank_regular/?log_id=<?php echo $this->session->userdata["logged_in"]["id"]; ?>',
                    type: 'get',
                    data: {name: $('input#search').val()},
                    success: function(response) {
                       $('table#resultTable tbody').html(response);
                    }
                });
            }
    </script>

    <script type="text/javascript">
            $('form#process_invoice_regular').submit(function(e){
                e.preventDefault();
                makeAjaxRequest1();
                return false;
            });

            function makeAjaxRequest1(){
                $.ajax({
                    url: '<?php echo base_url();?>search/result_invoice_regular/?log_id1=<?php echo $this->session->userdata["logged_in"]["id"]; ?>',
                    type: 'get',
                    data: {name: $('input#search').val()},
                    success: function(response) {
                       $('table#resultTable tbody').html(response);
                    }
                });
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
<script>
  $(document).ready(function() {
    $('.confirm-div').hide();
    <?php if($this->session->flashdata('msg')){ ?>
    $('.confirm-div').html('<p><i class="fa fa-check-circle"></i>&nbsp;&nbsp;<?php echo $this->session->flashdata('msg'); ?></p>').show().delay(500).fadeIn('normal', function() {
      $(this).delay(2500).fadeOut();
   });
  });
<?php } ?>
</script>
</body>
</html>