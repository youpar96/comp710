@extends('layouts.app')

@section('content')
@guest
    <h1> You are not logged in. Please go back.</h1>
@else
<div class="well"><h4>Boss Cuts Available Services - awaiting Diego's css Styling before I Flash it up!!!!</h4></div>    
<div class='container'>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
     </div>
    @endif
</div>
<div class="container">
    <div class = "row">
        <div class = "col-md-3">Service</div>
        <div class = "col-md-2">Price $</div>
        <div class = "col-md-1">Time Minutes</div>
        <div class = "col-md-6">Description</div>
    </div>
    @foreach ($styles as $style)
        <div class = "row">
            <br>
            <div class = "col-md-3">{{$style->st_name}}</div>
            <div class = "col-md-2">{{$style->st_cost}}</div>
            <div class = "col-md-1">{{$style->st_duration}}</div>
            <div class = "col-md-6">{{ str_limit($style->st_description, $limit = 50, $end = '...') }}</div>
        </div>
        @endforeach
    </div>
</div>
@endguest
@endsection
</body>
</html>