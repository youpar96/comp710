<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ secure_asset('admin/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>BossCuts</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- <link href=" secure_asset('admin/css/bootstrap.min.css') " rel="stylesheet" />  -->
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ secure_asset('admin/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ secure_asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    
    <script src="{{ secure_asset('admin/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>

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
                <li class="home active">
                    <a href="/admin/home">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <!--<li class="booking">-->
                <!--    <a href="/admin/booking">-->
                <!--        <i class="pe-7s-note2"></i>-->
                <!--        <p>Booking</p>-->
                <!--    </a>-->
                <!--</li>-->
                <li class="calendar">
                    <a href="/admin/calendar">
                        <i class="pe-7s-note2"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="staff">
                    <a href="/admin/staff">
                        <i class="pe-7s-user"></i>
                        <p>Staff</p>
                    </a>
                </li>
                <li class="gallery">
                    <a href="/admin/gallery">
                        <i class="pe-7s-album"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="style">
                    <a href="/stylesAD">
                        <i class="pe-7s-news-paper"></i>
                        <p>Style</p>
                    </a>
                </li>
                <li class="application">
                    <a href="/jobsAD">
                        <i class="pe-7s-bell"></i>
                        <p>Job Applications</p>
                    </a>
                </li>
                <li class="public">
                    <a href="/">
                        <i class="pe-7s-bell"></i>
                        <p>Public website</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin/home" id="navText" style="text-transform:uppercase;">Home</a>
                </div>
                <div>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ secure_url(URL::route('login', [], false)) }}">{{ __('Login') }}</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> 
                            -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ secure_url(route('logout')) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
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
	<script src="{{ secure_asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ secure_asset('admin/js/bootstrap-notify.js') }}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ secure_asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>
	
	<!-- File Upload -->
	<script src="{{ secure_asset('admin/js/bootstrap-fileselect.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
    	    var curUrl = $(location).attr("href");
    	    var category = curUrl.substring(curUrl.lastIndexOf("/", curUrl) + 1, curUrl.length);
    	    $(".nav > li").removeClass("active");
    	    $("." + category).addClass("active");
    	    $("#navText").html(category);
    	    
    	    if(category == "gallery"){
    	        $('#images').fileselect({
    	            allowedFileExtensions: ['png', 'jpg', 'gif', 'bmp']
    	        });
    	    }
    	    
        	/*$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
            },{
                type: 'info',
                timer: 4000
            });*/
    	});
	</script>

</html>