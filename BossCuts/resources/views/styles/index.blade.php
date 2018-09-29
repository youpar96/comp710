@extends('layouts.front')
@section('content')
<div class="site-heading-upper text-primary mb-3"><h1>Our Services</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-5">
            <table class="table table-sm table-bordered table-striped table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope = "col">Service</th>
                        <th scope = "col">Price $</th>
                        <th scope = "col">Description</th>
                    </tr>   
                </thead>
                <tbody>
                    @foreach ($styles as $style)
                        <tr>
                            <th scope="row">{{$style->st_name}}</th>
                            <td>{{$style->st_cost}}</td>
                            <td>{{$style->st_description}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6 col-md-7">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ secure_asset('img/boss_about.jpg') }}" alt="">
        </div>
    </div>
    
</div>
<div class="container">

</div>

@endsection
</body>
</html>