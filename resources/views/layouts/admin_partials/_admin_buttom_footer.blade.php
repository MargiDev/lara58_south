<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('/js/admin_js/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/js/admin_js/bootstrap/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/admin_js/adminlte/adminlte.min.js') }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
     <!-- iCheck -->
<script src="{{ asset('/js/admin_js/plugins/iCheck/icheck.min.js') }}"></script>
<script>
 $(function () {
   $('input').iCheck({
     checkboxClass: 'icheckbox_square-red',
     radioClass: 'iradio_square-red',
     increaseArea: '20%' /* optional */
   });
 });
</script>
</script>
</body>
</html>
