
@include('layouts.frontend_partials._top_header')

    <!-- ##### Header Area Start ##### -->
    @include('layouts.frontend_layouts.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    @include('layouts.frontend_layouts.hero')
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('layouts.frontend_layouts.advance_search')
    <!-- ##### Advance Search Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend_layouts.footer')
    <!-- ##### Footer Area End ##### -->

@include('layouts.frontend_partials._buttom_footer')
