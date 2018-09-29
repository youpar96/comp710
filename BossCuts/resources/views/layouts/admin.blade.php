<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BossCuts - Keep your style</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('css/business-casual.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/creative.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <!---------------side Nav Bar--------------------->
    <div id="mySidenav" class="sidenav navbar-dark navbar-expand-lg">
        <a href="#"></a>
        <a href="#">Booking</a>
        <a href="#">Calendar</a>
        <a href="#">Staff</a>
        <a href="/stylesAD">Styles</a>
        <a href="/jobsAD">Jobs</a>
    </div>
    <div class="main">
        <h1 class="site-heading text-center text-black d-none d-lg-block">
            <span class="site-heading-upper"><b>BOSS CUTS - Administration</b></span>
        </h1>
        <!-- start content area -->
        @yield("content")
        <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; BossCuts 2018</p>
        </div>
    </footer>
        <!-- end content area -->
    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Plugin JavaScript -->
    <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <!-- Custom scripts for this template -->
    <script src="{{ secure_asset('js/creative.min.js') }}"></script>

  </body>

</html>