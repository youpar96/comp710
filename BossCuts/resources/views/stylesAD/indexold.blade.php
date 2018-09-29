@extends('layouts.app')
@section('content')
<div class="section-heading"><h1>Add Change Delete Styles of Cut</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<table class="table table-bordered table-dark table-responsive">
    <thead class="thead-light">
        <tr>
            <th scope = "col3">Service</th>
            <th scope = "col2">Price $</th>
            <th scope = "col2">Time Minutes</th>
            <th scope = "col3">Description</th>
            <th scope = "col2">Action</th>
        </tr>
    </thead>
    @foreach ($styles as $style)
        <tr>
            <th scope="row">{{$style->st_name}}</th>
            <td>{{$style->st_cost}}</td>
            <td>{{$style->st_duration}}</td>
            <td>{{$style->st_description}}</td>
            <td>
                <a href="stylesAD/{{ $style['id'] }}/edit" class="btn btn-primary btn-sm">Edit</a>

                <form action="{{action('StylesADController@destroy',$style['id'])}} "method="post" >
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="stylesAD/create" class="btn btn-primary btn-lg">Add a New Style</a>
 
@endsection
</body>
</html>