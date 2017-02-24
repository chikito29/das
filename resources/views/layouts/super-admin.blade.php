
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="/css/theme-dark-head-light.css"/>
    <!-- EOF CSS INCLUDE -->

    @yield('head-scripts')

</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container page-navigation-top">
    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal">
            <li class="xn-logo">
                <a href="index.html">DAS</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Documents</span></a>
                <ul class="animated zoomIn">
                    <li><a href="layout-boxed.html"><span class="fa fa-bars"></span> List</a></li>
                    <li><a href="layout-nav-toggled.html"><span class="fa fa-file"></span> Create</a></li>
                    <li><a href="layout-nav-toggled-hover.html"><span class="fa fa-edit"></span> Edit</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Departments</span></a>
                <ul class="animated zoomIn">
                    <li><a href="ui-widgets.html"><span class="fa fa-bars"></span> List</a></li>
                    <li><a href="ui-elements.html"><span class="fa fa-file"></span> Create</a></li>
                    <li><a href="ui-buttons.html"><span class="fa fa-edit"></span> Edit</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bell"></span> <span class="xn-text">Notifications</span></a>
            </li>

            <!-- POWER OFF -->
            <li class="xn-icon-button pull-right last">
                <a href="#"><span class="fa fa-power-off"></span></a>
                <ul class="xn-drop-left animated zoomIn">
                    <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                    <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                </ul>
            </li>
            <!-- END POWER OFF -->

        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            @yield('breadcrumb')
        </ul>
        <!-- END BREADCRUMB -->

        <div class="page-title">
            <h2>@yield('page-title')</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            @yield('page-content-wrapper')

            <div class="x-content-footer">
                Copyright © 2017 NEWSIM. All rights reserved
            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->

    </div>
    <!-- END PAGE CONTENT -->

</div>
<!-- END PAGE CONTAINER -->

@yield('message-box')

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/actions.js"></script>
<!-- END TEMPLATE -->

@yield('scripts')
<!-- END SCRIPTS -->
</body>
</html>
