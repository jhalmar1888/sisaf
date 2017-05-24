<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SISAF</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet" />
    <link href="css/style-responsive.min.css" rel="stylesheet" />
    <link href="css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>

<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            @yield('titulopagina')
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-user">
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">Cerrar Sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <!-- end mobile sidebar expand / collapse button -->
    </div>
    <!-- end container-fluid -->
</div>

<!-- end #header -->
<!-- begin #page-container -->
<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;"><img src="img/user-13.jpg" alt="" /></a>
                    </div>
                    @include('partials.perfil')
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            @include('partials.menu')
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        @yield('rutas')
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        @yield('subtitulo')
        <!-- end page-header -->

        @yield('contenido')
    </div>
    <!-- end #content -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="crossbrowserjs/html5shiv.js"></script>
<script src="crossbrowserjs/respond.min.js"></script>
<script src="crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>
</html>
