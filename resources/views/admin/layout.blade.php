<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Pendiente</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="/codebase/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/codebase/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/codebase/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    @stack('styles')

    <link rel="stylesheet" href="/codebase/js/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" id="css-main" href="/codebase/css/codebase.min.css">
    <link rel="stylesheet" id="css-theme" href="/codebase/css/themes/pulse.min.css">
    <link rel="stylesheet" id="css-theme" href="/codebase/css/gm.css">

</head>
<body>


{{--<div id="page-loader" class="show bg-gd-gm"></div>--}}
<div id="page-container" class="sidebar-o side-scroll page-header-fixed main-content-boxed">


    <!--Menu-->
        @include('admin.partials.menu')
    <!--END Menu-->
    <!-- Header -->
        @include('admin.partials.header')
    <!-- END Header -->


    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                {{--Cgfd <i class="fa fa-heart text-pulse"></i> por <a class="font-w600" href="#" target="_blank"></a>--}}
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://www.dixel.cl" target="_blank">Dixel</a> &copy; <span class="js-year-copy">2018</span>
            </div>
        </div>
    </footer>

    <!-- Fade In Modal -->
    @include('admin.users.create')


    <!-- END Fade In Modal -->
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Codebase Core JS -->
<script src="/codebase/js/core/jquery.min.js"></script>
<script src="/codebase/js/core/popper.min.js"></script>
<script src="/codebase/js/core/bootstrap.min.js"></script>
<script src="/codebase/js/core/jquery.slimscroll.min.js"></script>
<script src="/codebase/js/core/jquery.scrollLock.min.js"></script>
<script src="/codebase/js/core/jquery.appear.min.js"></script>
<script src="/codebase/js/core/jquery.countTo.min.js"></script>
<script src="/codebase/js/core/js.cookie.min.js"></script>
<script src="/codebase/js/codebase.js"></script>


@stack('scripts')
</body>
</html>