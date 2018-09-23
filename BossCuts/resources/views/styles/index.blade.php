@extends('layouts.app')
@section('content')
<div class="site-heading-upper text-primary mb-3"><h1>Our Services</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
    <div class = "row section-heading">
        <div class = "col-sm-3">Service</div>
        <div class = "col-sm-2">Price $</div>
        <div class = "col-sm-2">Time Minutes</div>
        <div class = "col-sm-5">Description</div>
        </div>
        
    </div>
    @foreach ($styles as $style)
        <div class = "row">
            <br>
            <div class = "col-sm-3">{{$style->st_name}}</div>
            <div class = "col-sm-2">{{$style->st_cost}}</div>
            <div class = "col-sm-2">{{$style->st_duration}}</div>
            <div class = "col-sm-5">{{$style->st_description}}</div>
        </div>
    @endforeach
    </div>
</div>
@endsection
</body>
</html>