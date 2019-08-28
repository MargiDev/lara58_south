
@include('layouts.admin_partials._admin_top_header')

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.admin_layouts.main_header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.admin_layouts.main_sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layouts.admin_layouts.main_footer')

  <!-- Control Sidebar -->
  @include('layouts.admin_layouts.control_sidebar')
</div>
<!-- ./wrapper -->

@include('layouts.admin_partials._admin_buttom_footer')
