<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    @include('layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">      
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
  </div><!-- ./wrapper -->

  @section('scripts')
  @include('layouts.partials.scripts')
  @show

</body>
</html>
