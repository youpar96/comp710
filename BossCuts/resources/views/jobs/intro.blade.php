@extends('layouts.front')
@section('content')
<div class="jumbotron text-center">
  <h1>Join Boss Cuts</h1>
</div>
<!--     This is justs a landing page to introduce jobs at Boss Cuts ---->
<!--     If the applicant successfully enters their details, redirect back here with success message ---->

<div class="container">
  @include ('layouts.errors')
  @include ('layouts.success')
  <div class="row">
    <div class="col-sm-4">
      <div class="links">
        <a href="jobs/create">Click here to apply for a job with Boss Cuts. If you have an electronic CV get it ready to upload!</a>
      </div>
      <br>
      <p>At Boss Cuts we pride ourselves on fast friendly service with the needs of our clients top of mind.</p>
      <p>Our staff have a creative flare and keep up with the latest fashion trends. We are looking for staff 
      who will fit in with the team.</p>
    </div>
    <div class="col-sm-8">
      <img class="mg-fluid mb-3 mb-lg-0 rounded" src="{{ secure_asset('img/workForUs.jpg') }}" alt="">
    </div>
  </div>
</div>
<div class="container">
    <div class="well"><h1></h1></div>
   
    
    <br>
    <div class="col-6 col-md-8">
        <img class="mg-fluid mb-3 mb-lg-0 rounded" src="{{ secure_asset('img/workForUs.jpg') }}" alt="">
    </div>
</div>
@endsection