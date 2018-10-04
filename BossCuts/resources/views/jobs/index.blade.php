@extends('layouts.admin')
@section('content')
<div class="section-heading">
        <h1>Job Applications</h1>
</div>

@include ('layouts.errors')
@include ('layouts.success')

<!-- Filter Buttons - colour coded  -->
<div class="row">
    <div class = "col-auto ml-auto">
        Status<i class="fa fa-filter" ></i>
        <a href="/jobsAD/filter/{{ 'new' }}" class="btn btn-success btn-xs {{ $filter == 'new'? 'active' : '' }}">New</a>
        <a href="/jobsAD/filter/{{ 'read' }}" class="btn btn-primary btn-xs {{ $filter == 'read'? 'active' : '' }}">Read</a>
        <a href="/jobsAD/filter/{{ 'contact' }}" class="btn btn-info btn-xs {{ $filter == 'contact'? 'active' : '' }}">Contact</a>
        <a href="/jobsAD/filter/{{ 'hold' }}" class="btn btn-warning btn-xs {{ $filter == 'hold'? 'active' : '' }}">Hold</a>
        <a href="/jobsAD/filter/{{ 'reject' }}" class="btn btn-danger btn-xs {{ $filter == 'reject'? 'active' : '' }}">Reject</a>
        <a href="/jobsAD" class="btn btn-primary btn-xs {{ $filter == 'all'? 'active' : '' }}">Show All</a>
    </div>
</div>

<table class="table table-bordered table-light table-responsive table-striped">
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
                <a href="/jobsAD/{{$job->id}}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i> Details
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
</body>
</html>