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
            $('form#process1').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });

            function makeAjaxRequest(){
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




 
  </body>
</html>