@extends('layouts.admin')
@section('content')
<div class="section-heading"><h1>Job Applications</h1></div>    
@include ('layouts.errors')
@include ('layouts.success')
<table class="table table-bordered table-light table-responsive">
    <thead class="thead-dark">
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
                <a href="jobsAD/{{$job->id}}" class="btn btn-primary btn-sm">View Detail</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
</body>
</html>