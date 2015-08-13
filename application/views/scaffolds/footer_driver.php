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

  <script type="text/javascript">
            $('form#search_by_jobbank_driver').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });

            function makeAjaxRequest(){
                $.ajax({
                    url: '<?php echo base_url();?>search/result_jobBank_driver',
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
function goBack() {
    window.history.back();
}
</script>

<script>
  $('#card-table').cardtable({myClass:'stacktable small-only' });
</script>
 <script>
  $(document).ready(function() {
    $('.confirm-div').hide();
    <?php if($this->session->flashdata('msg')){ ?>
      $('.confirm-div').html('<p><i class="fa fa-check-circle"></i>&nbsp;&nbsp;<?php echo $this->session->flashdata('msg'); ?></p>').show().delay(500).fadeIn('normal', function() {
      $(this).delay(4000).fadeOut();
   });
  });
<?php } ?>
</script>
  </body>
</html>