
 </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?= BASEPATH; ?>/assets/plugins/jQuery/jquery-3.5.1.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?= BASEPATH; ?>/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= BASEPATH; ?>/assets/bootstrap/js/script.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?= BASEPATH; ?>/assets/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?= BASEPATH; ?>/assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEPATH; ?>/assets/dist/js/app.min.js" type="text/javascript"></script>
    
    <!-- DATA TABES SCRIPT -->
    <script src="<?= BASEPATH; ?>/assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?= BASEPATH; ?>/assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= BASEPATH; ?>/assets/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>