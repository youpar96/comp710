@extends('layouts.front')
@section('content')
<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<div class="container">
    <div class="well"><h1>Join Boss Cuts</h1></div>
    @include ('layouts.errors')
    @include ('layouts.success')
    <div class="links">
        <a href="jobs/create">Click here to apply for a job with Boss Cuts</a>
    </div>
    <br>
    <div class="col-6 col-md-8">
        <img class="mg-fluid mb-3 mb-lg-0 rounded" src="{{ secure_asset('img/workForUs.jpg') }}" alt="">
    </div>
</div>
@endsection