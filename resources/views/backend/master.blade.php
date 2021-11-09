

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Point of Sale system</title>

    <!-- Bootstrap -->
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('/css/bootstrap-progressbar-3.3.4.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('/css/jqvmap.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('/css/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('/css/custom.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../admin/dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Sports shop </span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{url('/images/img.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Sports shop </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        @include('backend.partials.sitebar')
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../src/store/Logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
@include('backend.partials.header')
<!-- /top navigation -->        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Live Event in live</span>
                    <div class="count">3</div>
                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total Notice in board</span>
                    <div class="count">2</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                    <div class="count green">2,500</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                    <div class="count">4,567</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                    <div class="count">2,315</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                    <div class="count">7,325</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
            </div>
            <!-- /top tiles -->

            


                        <!-- Start to do list -->
                        
                        <!-- End to do list -->

                        <!-- start of weather widget -->
                        
                        <!-- end of weather widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <footer>
    <div class="pull-right">
        Point of Sale System for <a href="#">Sports shop</a>
    <div class="clearfix"></div>
</footer>        <!-- /footer content include -->
    </div>
</div>

<!-- jQuery -->
<script src="{{url('/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/js/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('/js/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{url('/js/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{url('/js/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('/js/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('/js/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('/js/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('/js/jquery.flot.js')}}"></script>
<script src="{{url('/js/jquery.flot.pie.js')}}"></script>
<script src="{{url('/js/jquery.flot.time.js')}}"></script>
<script src="{{url('/js/jquery.flot.stack.js')}}"></script>
<script src="{{url('/js/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('/js/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('/js/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('/js/jquery.vmap.min.js')}}"></script>
<script src="{{url('/js/jquery.vmap.world.js')}}"></script>
<script src="{{url('/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('/js/moment.min.js')}}"></script>
<script src="{{url('/js/daterangepicker.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{url('/js/custom.min.js')}}"></script>
</body>
</html>

