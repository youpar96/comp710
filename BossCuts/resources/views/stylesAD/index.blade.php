@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')
    <div class="section-heading"><h3>Add Change Delete Styles of Cut</h3></div>    
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
                <th class='font-size-18px' scope="row">{{$style->st_name}}</th>
                <td>{{$style->st_cost}}</td>
                <td>{{$style->st_duration}}</td>
                <td>{{$style->st_description}}</td>
                <td>
                    <!--<div class="button-box">-->
                    <div class="pull-left">
                        <a href="stylesAD/{{ $style['id'] }}/edit" class="btn btn-primary btn-xs">Edit</a>
                    </div>
                    <div class="pull-right">
                    <form action="{{url('stylesAD',$style['id'])}} "method="post" >
                        {{csrf_field()}} <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
<a href="stylesAD/create" class="btn btn-primary btn-lg">Add a New Style</a>
@endsection
</body>
</html>