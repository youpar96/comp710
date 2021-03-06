<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BossCuts - Keep your style</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('css/business-casual.min.css') }}" rel="stylesheet">
    <!--<link href="{{ secure_asset('css/creative.min.css') }}" rel="stylesheet">-->
  </head>

  <body>
      <h1 class="site-heading text-center text-black d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">keep your style</span>
      <span class="site-heading-lower"><b>BOSS CUTS</b></span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="/">Boss Cuts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4 home">
              <a class="nav-link text-uppercase text-expanded" href="/">Home</a>
            </li>
            <li class="nav-item px-lg-4 gallery">
              <a class="nav-link text-uppercase text-expanded" href="gallery">Gallery</a>
            </li>
            <li class="nav-item px-lg-4 service">
              <a class="nav-link text-uppercase text-expanded" href="styles">Service</a>
            </li>
            <li class="nav-item px-lg-4 about">
              <a class="nav-link text-uppercase text-expanded js-scroll-trigger" href="/#about">About</a>
            </li>
            <li class="nav-item px-lg-4 contact">
              <a class="nav-link text-uppercase text-expanded js-scroll-trigger" href="/#contact">Contact</a>
            </li>
            <li class="nav-item px-lg-4 jobs">
              <a class="nav-link text-uppercase text-expanded" href="jobs">Work Here</a>
            </li>
            <li class="nav-item px-lg-4 admin">
              <a class="nav-link text-uppercase text-expanded" href="/admin/home">Admin</a>
            </li>
            @guest
            @else
              <li class="nav-item px-lg-4 logout">
               <a class="nav-link text-uppercase text-expanded" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

<!-- start content area -->
    @yield("content")
<!-- end content area -->
    
    <footer class="footer text-faded text-center py-3">
      <div class="container">
        <p class="m-0 small">Copyright &copy; BossCuts 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Plugin JavaScript -->
    <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <!-- Custom scripts for this template -->
    <script src="{{ secure_asset('js/creative.min.js') }}"></script>
    
    <script type="text/javascript">
    	$(document).ready(function(){
    	    var curUrl = $(location).attr("href");
    	    var category = curUrl.substring(curUrl.lastIndexOf("/", curUrl) + 1, curUrl.length);
    	    $(".nav-item").removeClass("active");
    	    
    	    if(category == "" || category == null)  $(".home").addClass("active");
    	    else  $("." + category).addClass("active");
    	});
    </script>

  </body>

</html>
