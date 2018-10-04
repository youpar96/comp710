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
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Plugin JavaScript -->
    <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <!-- Custom scripts for this template -->
    <script src="{{ secure_asset('js/creative.min.js') }}"></script>
    
    <!-- Moment -->
    <script src='/js/moment.min.js' type="text/javascript"></script>
    
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
              <a class="nav-link text-uppercase text-expanded" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item px-lg-4 service">
              <a class="nav-link text-uppercase text-expanded" href="/styles">Service</a>
            </li>
            <li class="nav-item px-lg-4 about">
              <a class="nav-link text-uppercase text-expanded js-scroll-trigger" href="/#about">About</a>
            </li>
            <li class="nav-item px-lg-4 contact">
              <a class="nav-link text-uppercase text-expanded js-scroll-trigger" href="/#contact">Contact</a>
            </li>
            <li class="nav-item px-lg-4 jobs">
              <a class="nav-link text-uppercase text-expanded" href="/jobs">Work Here</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ action('AppointmentController@appointment') }}">Appointments</a>
            </li>
            @guest
            <li class="nav-item px-lg-4 admin">
              <a class="nav-link text-uppercase text-expanded" href="/admin/home">Admin</a>
            </li>
            @else
              @if(auth()->user()->isAdmin())
                <li class="nav-item px-lg-4 admin">
                  <a class="nav-link text-uppercase text-expanded" href="/admin/home">Admin</a>
                </li>
              @endif
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
    <!-- <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    
    <!-- Plugin JavaScript -->
    <!-- <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script> -->
    
    <!-- Custom scripts for this template -->
    <!-- <script src="{{ secure_asset('js/creative.min.js') }}"></script> -->
    
    <script type="text/javascript">
    	$(document).ready(function(){
    	    var mobilecheck=function(){var check=false;(function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check=true})(navigator.userAgent||navigator.vendor||window.opera);return check}
    	    
          if(mobilecheck()){
            $(".carousel-inner").find("img").css("width", "100%").css("height", "100%");
            $(".intro-text").css("margin-top", "1rem");
          }
          
    	    var curUrl = $(location).attr("href");
    	    var category = curUrl.substring(curUrl.lastIndexOf("/", curUrl) + 1, curUrl.length);
    	    $(".nav-item").removeClass("active");
    	    
    	    if(category == "" || category == null)  $(".home").addClass("active");
    	    else  $("." + category).addClass("active");
    	});
    </script>

  </body>

</html>
