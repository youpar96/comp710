@extends('layouts.admin')
@section('content')
<h2>Detailed Applicant Listing</h2>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container-fluid">
  <!-------------------------------------------- Names --------------------------------------->
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Name:</div>
    <div class = "col-md-10">{{$job->j_fname}} {{$job->j_sname}}</div>
  </div>
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Preferred Name:</div>
    <div class = "col-md-10">{{$job->j_prefname}}</div>
  </div>
<!------------------------------------------- Contact Details -------------------------------->
  <div class="row">
    <div class = "col-md-2 font-weight-bold ">Email Address:</div>
    <div class = "col-md-4">{{$job->j_email}}</div>
    <div class = "col-md-2 font-weight-bold">Pref Contact Method:</div>
    <div class = "col-md-4">{{$job->j_pref_cont_meth}}</div>
  </div>
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Phone:</div>
    <div class = "col-md-10">{{$job->j_phone}}</div>
  </div>
  <!------------------------------------------- Work Type & Work Days -------------------------------->
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Type of work wanted:</div>
    <div class = "col-md-4">
      {{$job->j_fulltime == 1? "Full time  " : "  " }}  
      {{$job->j_parttime == 1? "Part time  " : "  " }}  
      {{$job->j_casual == 1? "Casual" : "" }}
    </div>
    <div class = "col-md-2 font-weight-bold">Work Days:</div>
    <div class = "col-md-4">
      {{$job->j_weekdays == 1? "Weekdays  " : "  " }}  
      {{$job->j_saturdays == 1? "Saturdays  " : "  " }}  
      {{$job->j_sundays == 1? "Sundays" : "" }}
    </div>
  </div>
  <!------------------------------------------- Visa -------------------------------->
  <div class="row">
    <div class="col-md-2 font-weight-bold">Visa Status:</div>
    <div class="col-md-10">
      <?php
      switch ($job->j_workinNZ){
        case "citPR": 
          echo "Is a citizen or permanent resident";
          break;
        case "visa":
          echo "Has a work Visa";
          break;
        default:
          echo "Has no Visa";
          break;
      }
      ?>
    </div>
  </div>
  
  <!------------------------------------------- H&S Issues -------------------------------->
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Disclosed H&S Issues:</div>
    <div class = "col-md-10">
      {{$job->j_issue_movement == 1? "Physical Movement.  " : "  " }}  
      {{$job->j_issue_skin == 1? "Skin conditions.  " : "  " }}  
      {{$job->j_issue_RSI == 1? "Progressive diseases" : "" }}
    </div>
  </div>
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Explanation about H&S:</div>
    <div class = "col-md-10">{{$job->j_issue_notes}}</div>
  </div>
<!------------------------------------------- Declaration Cover Letter & Path -------------------------->
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Applicant Declaration:</div>
    <div class = "col-md-10">
      {{$job->j_declaration == 1? "Stated True & Correct  " : "Applicant has not ticked declaration!  " }}  
    </div>
  </div>
  <div class="row">
    <div class = "col-md-2 font-weight-bold">Cover Letter:</div>
    <div class = "col-md-10">{{$job->j_cover_letter}}</div>
  </div>
    @if($job->hasCV())
      <div class="row">
          <form action="{{action('JobsADController@downloadCV',$job['j_cvpath'])}} "method="post" >
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="post">
                            <button class="btn btn-secondary btn-block" type="submit">Press to Download CV</button>
          </form>
      </div>
    @else
      <div class="row">
          Applicant has not uploaded a CV
      </div>
    @endif
  </div>
  <hr>
  <div class="row">
    <div class = "col-md-3 font-weight-bold">Applicant's Current Status:</div>
    <div class = "col-md-9 text-uppercase">{{$job->j_status}}</div>
  </div>
  <h3>Change Applicant's Status</h3>
  <form class="d-inline" action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='contact'>
    <button class="btn btn-success btn-sm" type="submit">Contact</button>
  </form>
  <form class="d-inline" action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='hold'>
    <button class="btn btn-info btn-sm" type="submit">Hold</button>
  </form>
  <form class="d-inline" action="{{ action('JobsADController@statusChange',$job['id']) }} "method="post" >
    {{csrf_field()}}
    <input name="_method" type="hidden" value="post">
    <input name="newStatus" type = "hidden" value='reject'>
    <button class="btn btn-primary btn-sm" type="submit">Reject</button>
  </form>
  <div>
    <p>
      Select one of the above buttons to change an applicant's status. 
      Once you display the application on this screen it automatically changes from 'new' to 'read'.
    </p>
    <p>For those applicants you wish to contact - use the contact button.</p>
    <p>For those applicants that look good but you don't have a vacancy select 'hold'.</p>
    <p>For those applicants who you wish to reject, select 'reject'.</p>
  </div>
</div>
@endsection