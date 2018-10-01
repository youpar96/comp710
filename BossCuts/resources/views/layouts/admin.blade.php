<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ secure_asset('admin/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ secure_asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ secure_asset('admin/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ secure_asset('admin/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ secure_asset('admin/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ secure_asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="gray" data-image="{{ secure_asset('img/workForUs.jpg') }}">

    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    Boss Cuts
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/admin/home">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/booking">
                        <i class="pe-7s-note2"></i>
                        <p>Booking</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/calendar">
                        <i class="pe-7s-note2"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/staff">
                        <i class="pe-7s-user"></i>
                        <p>Staff</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/gallery">
                        <i class="pe-7s-album"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/style">
                        <i class="pe-7s-news-paper"></i>
                        <p>Style</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/application">
                        <i class="pe-7s-bell"></i>
                        <p>Application</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/adminHome" id="navText">Home</a>
                </div>
            </div>
        </nav>
        
        <div class="content">
<!-- start content area -->
            @yield("content")
<!-- end content area -->
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <!--<nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>-->
                <p class="copyright pull-right">
                    <!--&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web-->
                    Copyright &copy; BossCuts 2018
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ secure_asset('admin/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ secure_asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ secure_asset('admin/js/bootstrap-notify.js') }}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ secure_asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

	<script type="text/javascript">
    	/* notification
    	$(document).ready(function(){
        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
            },{
                type: 'info',
                timer: 4000
            });
    	});*/
	</script>

</html>