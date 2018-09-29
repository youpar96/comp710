@extends('layouts.app')
@section('content')
<div class="well well-lg">
  Detailed Applicant Listing
</div>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container-fluid">
  <!-------------------------------------------- Names --------------------------------------->
  <div class="row">
    <div class = "col-md-2">Name:</div>
    <div class = "col-md-10">{{$job->j_fname}} {{$job->j_sname}}</div>
  </div>
  <div class="row">
    <div class = "col-md-2">Preferred Name:</div>
    <div class = "col-md-10">{{$job->j_prefname}}</div>
  </div>
<!------------------------------------------- Contact Details -------------------------------->
  <div class="row">
    <div class = "col-md-2">Email Address:</div>
    <div class = "col-md-4">{{$job->j_email}}</div>
    <div class = "col-md-2">Preferred Contact Method:</div>
    <div class = "col-md-4">{{$job->j_pref_cont_meth}}</div>
  </div>
  <div class="row">
    <div class = "col-md-2">Phone:</div>
    <div class = "col-md-10">{{$job->j_phone}}</div>
  </div>
<!------------------------------------------- Cover Letter & Path -------------------------->
  <div class="row">
    <div class = "col-md-2">Cover Letter:</div>
    <div class = "col-md-10">{{$job->j_cover_letter}}</div>
  </div>
    @if($job->hasCV())
      <div class="row">
          <form action="{{action('JobsADController@downloadCV',$job['j_cvpath'])}} "method="post" >
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="post">
                            <button class="btn btn-primary btn-block" type="submit">Download CV</button>
          </form>
      </div>
    @else
      <div class="row">
          Applicant has not uploaded a CV
      </div>
    @endif
  </div>
  <div class="row">
    <div class = "col-md-2">Status:</div>
    <div class = "col-md-10">{{$job->j_status}}</div>
  </div>
  <h1>Change Applicant's Status</h1>
  <form action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='contact'>
    <button class="btn btn-primary btn-sm" type="submit">Contact</button>
  </form>
  <form action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='hold'>
    <button class="btn btn-primary btn-sm" type="submit">Hold</button>
  </form><form action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='reject'>
    <button class="btn btn-primary btn-sm" type="submit">Reject</button>
  </form>
</div>
@endsection