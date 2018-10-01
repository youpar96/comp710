@extends("layouts.front")

@section('content')
<!-- Portfolio Grid -->
<section class="" id="portfolio" style="margin-top:5rem;margin-bottom:5rem;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Gallery</h2>
        <h3 class="section-subheading text-muted">&nbsp;</h3>
      </div>
    </div>
    <div class="row">
      @foreach( $images as $image )
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <img class="img-fluid" src="{{ secure_asset('$image -> img_path') }}" alt="">
        </a>
        <!--<div class="portfolio-caption">
          <p class="text-muted">Illustration</p>
        </div>-->
      </div>
      @endforeach
      </div>
    </div>
  </div>
</section>
@endsection