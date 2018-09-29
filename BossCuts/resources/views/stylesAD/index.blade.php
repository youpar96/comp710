@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')
    <div class="section-heading"><h3>Add Change Delete Styles of Cut</h3></div>    
    <table class="table table-bordered table-light table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope = "col">Service</th>
                <th scope = "col">Price $</th>
                <th scope = "col">Time Minutes</th>
                <th scope = "col">Description</th>
                <th scope = "col">Action </th>
            </tr>
        </thead>
        @foreach ($styles as $style)
            <tr>
                <th  scope="row">{{$style->st_name}}</th>
                <td>{{$style->st_cost}}</td>
                <td>{{$style->st_duration}}</td>
                <td>{{$style->st_description}}</td>
                <td>
                    <div class="d-inline">
                        <a href="stylesAD/{{ $style['id'] }}/edit" class="btn btn-primary btn-xs">Edit</a>
                    </div>
                    <div class="d-inline">
                    <form class="d-inline"  action="{{url('stylesAD',$style['id'])}} "method="post" >
                        {{csrf_field()}} <input name="_method" type="hidden" value="DELETE">
                        <button class="d-inline btn btn-danger btn-xs" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
<a href="stylesAD/create" class="btn btn-primary btn-lg">Add a New Style</a>
<hr>
@endsection
</body>
</html>