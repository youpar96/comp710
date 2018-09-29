@extends('layouts.app')
@section('content')
<div class="section-heading"><h1>Job Applications</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<table class="table table-bordered table-dark table-responsive">
    <thead class="thead-light">
        <tr>
            <th scope = "col">Name</div>
            <th scope = "col">Email</div>
            <th scope = "col">Phone</div>
            <th scope = "col">Preferred Contact</div>
            <th scope = "col">Status</div>
            <th scope = "col">Action</div>
        </tr>
    </thead>
    <tbody>
    @foreach ($jobs as $job)
        <tr>
            <th scope="row">{{$job->j_fname}} {{$job->j_sname}}</td>
            <td>{{$job->j_email}}</td>
            <td>{{$job->j_phone}}</td>
            <td>{{$job->j_pref_cont_meth}}</td>
            <td>{{$job->j_status}}</td>
            <td>
               <form action="{{action('JobsADController@show',$job['id'])}}" method="get" >
                    {{csrf_field()}}
                    <!--<input name="_method" type="hidden" value="GET">-->
                    <button class='btn btn-primary btn-sm' type="submit">View Detail</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
</body>
</html>