@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')
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
          <input type="hidden" id="img_visible_{{ $image -> id }}" value="{{ $image -> img_visible }}">
          <input type="hidden" id="img_carousel_{{ $image -> id }}" value="{{ $image -> img_carousel }}">
        </a>
        <div class="portfolio-caption">
          <p class="text-muted">
            <input type="button" class="btn btn-primary btn-xs" value="Visible" onclick="manageImage('U', 'V', '{{ $image -> id }}');">@if($image -> img_visible) Y @else N @endif | 
            <input type="button" class="btn btn-primary btn-xs" value="Carousel" onclick="manageImage('U', 'C',  '{{ $image -> id }}');">@if($image -> img_carousel) Y @else N @endif | 
            <!--Video @if($image -> img_visible) Y @else N @endif | -->
            <input type="button" class="btn btn-danger btn-xs" value="Delete" onclick="manageImage('D', '', '{{ $image -> id }}');">
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<script type="text/javascript">
function manageImage(type, opt, id){
  // update
  if(type == "U"){
    // update the visible value
    if(opt == "V" && confirm("Are you sure to chage the visible value of the image ?")){
      var newVisible = $("#img_visible_" + id).val() == 0 ? 1 : 0;
      location.href = "/admin/gallery/update/" + id + "?opt=V&val=" + newVisible;
    }
    // update the carousel value
    else if(opt == "C" && confirm("Are you sure to change the carousel value of the image ?")){
      var newCarousel = $("#img_carousel_" + id).val() == 0 ? 1 : 0;
      location.href = "/admin/gallery/update/" + id + "?opt=C&val=" + newCarousel;
    }
  }
  // delete
  else if(type == "D" && confirm("Are you sure to delete the image ?")){
    location.href = "/admin/gallery/delete/" + id;
  }
}
</script>
@endsection