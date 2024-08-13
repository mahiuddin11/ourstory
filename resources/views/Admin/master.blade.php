@include('Admin.leyout.header')

@include('Admin.leyout.sidbar')

<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('Admin.leyout.nav')


                 <!--  Content page load start -->
                    @yield('content')
                 <!--  Content page load  end-->


            </div>
            <!-- End of Main Content -->

@include('Admin.leyout.footer')

