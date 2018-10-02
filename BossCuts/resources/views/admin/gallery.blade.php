@extends('layouts.admin')
@section('content')
<!-- Portfolio Grid -->
<section class="">
  <div class="container">
    <section id="file" class="mb-5">
      <form method="POST" action="/admin/gallery/upload" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group input-group-btn">
          <label for="images">Select Images</label><br/>
          <input type="file" class="form-control-file" id="images" name="images[]" aria-describedby="fileHelp" required multiple style="display:none;">
          <button class="btn btn-primary ml-3" type="submit" style="float:left;">Upload</button>
        </div>
      </form>
    </section>
    <br/><br/>
    <div class="row">
      @foreach( $images as $image )
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <img class="img-fluid" src="{{ secure_asset($image -> img_path) }}" alt="" style="width:300px;height:200px;">
        </a>
        <div class="portfolio-caption">
          <p class="text-muted">
            <a href="#" class="btn btn-primary btn-xs ">Visible</a>@if($image -> img_visible) Y @else N @endif | 
            <a href="#" class="btn btn-primary btn-xs ">Carousel</a>@if($image -> img_carousel) Y @else N @endif |
            <a href="#" class="btn btn-primary btn-xs ">Video</a>@if($image -> img_video_ind) Y @else N @endif
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection