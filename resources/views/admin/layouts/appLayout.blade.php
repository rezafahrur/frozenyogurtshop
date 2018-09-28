<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @yield('pageTitle')
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/css/app.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/css/admin.css") }}" rel="stylesheet" type="text/css" />
</head>

<body class="hold-transition skin-black2 sidebar-mini fixed">
    <!-- Audio -->
    @include('admin.layouts.audio')

    <div class="wrapper">

        <!-- Header -->
        @include('admin.layouts.header')

        <!-- Sidebar -->
        @yield('sideBar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header blur">
                <h1>
                    @yield('contentTitle')
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Footer -->
        @include('admin.layouts.footer')

    </div><!-- ./wrapper -->


    <!-- REQUIRED SCRIPTS -->
    @yield('script')
</body>

</html>