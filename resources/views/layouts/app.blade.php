
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Kampo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href={{ asset('images/campos.png') }}>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{url('css/app.css')}}">


</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur consectetur debitis dolores, enim, error fuga inventore iste, quo ratione rerum sint! Atque excepturi laboriosam, libero nihil officiis qui ullam.
<!-- Begin page -->
<div id="layout-wrapper">

@include('layouts.Components.navbar')

    @include('layouts.Components.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

        @include('layouts.Components.footer')
    </div>
    <!-- end main content-->


<!-- END layout-wrapper -->

@include('layouts.Components.Rsidebar')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src = {{ url('js/app.js') }}></script>

</body>
</html>
