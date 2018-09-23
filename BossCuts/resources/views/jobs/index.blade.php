@extends('layouts.app')
@section('content')
<div class="section-heading"><h1>Job Applications</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
    <div class = "row table-heading">
        <div class = "col-sm-3">Name</div>
        <div class = "col-sm-4">Email</div>
        <div class = "col-sm-1">Phone</div>
        <div class = "col-sm-2">Preferred Contact</div>
        <div class = "col-sm-1">Status</div>
        <div class = "col-sm-1">Action</div>
    </div>
    @foreach ($jobs as $job)
        <div class = "row">
            <br>
            <div class = "col-sm-3">{{$job->j_fname}} {{$job->j_sname}}</div>
            <div class = "col-sm-4">{{$job->j_email}}</div>
            <div class = "col-sm-1">{{$job->j_phone}}</div>
            <div class = "col-sm-2">{{$job->j_pref_cont_meth}}</div>
            <div class = "col-sm-1">{{$job->j_status}}</div>
            <div class = "col-sm-1">
               <form action="{{action('JobsADController@show',$job['id'])}}" method="get" >
                    {{csrf_field()}}
                    <!--<input name="_method" type="hidden" value="GET">-->
                    <button class='btn btn-primary btn-sm' type="submit">View Detail</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
</body>
</html>