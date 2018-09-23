@extends('layouts.app')
@section('content')
<div class="section-heading"><h1>Add Change Delete Styles of Cut</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
    <div class = "row table-heading">
        <div class = "col-sm-3">Service</div>
        <div class = "col-sm-2">Price $</div>
        <div class = "col-sm-2">Time Minutes</div>
        <div class = "col-sm-3">Description</div>
        <div class = "col-sm-2">Action</div>
    </div>
    @foreach ($styles as $style)
        <div class = "row">
            <br>
            <div class = "col-sm-3">{{$style->st_name}}</div>
            <div class = "col-sm-2">{{$style->st_cost}}</div>
            <div class = "col-sm-2">{{$style->st_duration}}</div>
            <div class = "col-sm-3">{{$style->st_description}}</div>
            <div class = "col-sm-2">
                <form action="{{action('StylesADController@edit',$style['id'])}} "method="get" >
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="GET">
                    <button class='btn btn-primary btn-sm' type="submit">Edit</button>
                </form>
                <form action="{{action('StylesADController@destroy',$style['id'])}} "method="post" >
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    <form action="{{action('StylesADController@create')}} "method="get" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="GET">
        <button class='btn btn-primary btn-lg' type="submit">Add a New Style</button>
    </form>
</div>
@endsection
</body>
</html>