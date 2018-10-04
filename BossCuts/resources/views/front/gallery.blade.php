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
        @if ($image->img_visible)
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#originalImageModal" onclick="javascript:setImage('{{ secure_asset($image -> img_path) }}');">
          <img class="img-fluid" src="{{ secure_asset($image -> img_path) }}" alt="" style="width:350px;height:250px;">
        </a>
        <div class="portfolio-caption">
          <p class="text-muted">&nbsp;</p>
        </div>
      </div>
        @endif
      @endforeach
    </div>
    
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="originalImageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="max-width:70%;max-height:100%;margin-top:15rem;">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <img class="img-fluid d-block mx-auto" id="originalImage" src="" alt="" data-dismiss="modal" style="margin-top:5rem;margin-bottom:5rem;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function setImage(imgPath){
    $("#originalImage").attr("src", imgPath);
  }
</script>
@endsection