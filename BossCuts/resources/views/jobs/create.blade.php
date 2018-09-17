@extends('layouts.app')
@section('content')

<div class="well"><h1>Join Boss Cuts</h1></div>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
<form method="POST" action="{{url('jobs')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
  <!-------------------------------------------- Names ------------------------------------------------>
    <div class="form-group row">
      <label for="j_fname" class="col-sm-3 col-form-label">First Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="j_fname" name="j_fname" value="{{ old('j_fname') }}" placeholder="This is a required field"  maxlength=30 minlength=3>
      </div>
    </div>
  <div class="form-group row">
    <label for="j_sname" class="col-sm-3 col-form-label">Surname:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="j_sname" name="j_sname" value="{{ old('j_sname') }}" placeholder="This is a required field"  maxlength=30 minlength=3>
    </div>
  </div>  
  <div class="form-group row">
    <label for="j_prefname" class="col-sm-3 col-form-label">Preferred Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="j_prefname" name="j_prefname" value="{{ old('j_prefname') }}" maxlength=30 minlength=3>
    </div>
  </div>
<!------------------------------------------- Contact Details ----------------------------------------->
  <div class="form-group row">
    <label for="j_email" class="col-sm-3 col-form-label">Email Address:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="j_email" value="{{ old('j_email') }}" placeholder="This is a required field" name="j_email" >
    </div>
  </div>  
  <div class="form-group row">
    <label for="j_phone" class="col-sm-3 col-form-label">Phone:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="j_phone" value="{{ old('j_phone') }}"placeholder="This is a required field" name="j_phone" >
    </div>
  </div>
  <div class="row">
    <legend class="col-form-label col-sm-3 pt-0">Preferred Contact Method:</legend>
    <div class="col-sm-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="txt" {{ old('j_pref_cont_meth') == "txt" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_pref_cont_meth">Text</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="phone" {{ old('j_pref_cont_meth') == "phone" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_pref_cont_meth">Phone</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="email" {{ old('j_pref_cont_meth') == "email" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_pref_cont_meth">Email</label>
      </div>
    </div>
  </div>
<!-------------------------------------------- CV, Lett, StrtDate ------------------------------------------------>
  <div class="form-group row">
    <label for="j_cover_letter" class="col-sm-3">Tell us about yourself and why you want to join us:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="3" id="j_cover_letter" name="j_cover_letter" maxlength=1000 ></textarea>
    </div>
  </div>
  <div class="form-group row">
    Please upload your CV in PDF format.
  </div>
  <div class="form-group row">
    <label for ="cvUpload" class="col-sm-4">
       File size less than 2MB.</label>
    <div class= "col-sm-8">
      <input type="file" class="form-control-file" name="cvUpload" id="filehelp" value="{{old('cvUpload')}}" aria-describedby="fileHelp">
    </div>
  </div>
  <div class="form-group row">
    <label for="j_avail_date" class="col-sm-4">Date your could start work:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="j_avail_date" value="{{ old('j_avail_date') }}" name="j_avail_date" >
    </div>
  </div>
<!-------------------------------------------- Type, Days ------------------------------------------------>
  <div class="row">
    <legend class="col-form-label col-sm-4 pt-0">
      What type of work are you interested in?:
    </legend>
    <div class="col-sm-8">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_type[]"name="work_type[]" value="fulltime" {{session('fulltime') == "1" ?  'checked' : ''}}>
        <label class="form-check-label" for="j_pref_cont_meth">Fulltime</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_type[]"name="work_type[]" value="parttime" {{session('parttime') == "1" ?  'checked' : ''}}>
        <label class="form-check-label" for="j_pref_cont_meth">Part Time</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_type[]"name="work_type[]" value="casual"  {{session('casual') == "1" ?  'checked' : ''}} >
        <label class="form-check-label" for="j_pref_cont_meth">Casual</label>
      </div>
    </div>
  </div>
  <div class="row">
    <legend class="col-form-label col-sm-4 pt-0">
      What part(s) of the week can you work?:
    </legend>
    <div class="col-sm-8">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_days[]"name="work_days[]" value="weekdays" {{session('weekdays') == "1" ?  'checked' : ''}}>
        <label class="form-check-label" for="j_pref_cont_meth">Weekdays</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_days[]"name="work_days[]" value="saturdays" {{session('saturdays') == "1" ?  'checked' : ''}}>
        <label class="form-check-label" for="j_pref_cont_meth">Saturdays</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="work_days[]"name="work_days[]" value="sundays"  {{session('sundays') == "1" ?  'checked' : ''}} >
        <label class="form-check-label" for="j_pref_cont_meth">Sundays</label>
      </div>
    </div>
  </div>
<!-------------------------------------------- Visa ------------------------------------------------>
  <div class="row">
    <legend class="col-form-label col-sm-4 pt-0">Eligibility to Work in New Zealand:</legend>
    <div class="col-sm-8">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_workinNZ"name="j_workinNZ" value="citPR" {{ old('j_workinNZ') == "citPR" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_workinNZ">Citizen or Permanent Resident</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_workinNZ"name="j_workinNZ" value="visa" {{ old('j_workinNZ') == "visa" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_workinNZ">Work Visa</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_workinNZ"name="j_workinNZ" value="noVisa" {{ old('j_workinNZ') == "noVisa" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_pref_cont_meth">No Visa</label>
      </div>
    </div>
  </div>
  <br>
<!-------------------------------------------- Health ------------------------------------------------>
  <div class="row">
    <legend class="col-form-label col-sm-7 pt-0">
      Do you have any difficulities standing, walking, bending, lifting, or using your hands?:
    </legend>
    <div class="col-sm-5">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_movement"name="j_issue_movement" value="1" {{ old('j_issue_movement') == "1" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_movement">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_movement"name="j_issue_movement" value="0" {{ old('j_issue_movement') == "0" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_movement">No</label>
      </div>
    </div>
  </div>

  <div class="row">
    <legend class="col-form-label col-sm-7 pt-0">
      Do you have issues that you may need to manage in order to work, including cleaning, hand washing or use of products?:
    </legend>
    <div class="col-sm-5">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_skin"name="j_issue_skin" value="1" {{ old('j_issue_skin') ==  "1" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_skin">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_skin"name="j_issue_skin" value="0" {{ old('j_issue_skin') ==  "0" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_skin">No</label>
      </div>
    </div>
  </div>

<div class="row">
    <legend class="col-form-label col-sm-7 pt-0">
      Do you suffer from or have you suffered from any injury or medical condition caused by a work related gradual progressive disease or infection 
      (e.g. repetitive strain injury, carpal tunnel,       back injury, hearing loss) which this job may aggravate or contribute to?:
    </legend>
    <div class="col-sm-5">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_rsi"name="j_issue_rsi" value="1" {{ old('j_issue_rsi') ==  "1" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_rsi">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="j_issue_rsi"name="j_issue_rsi" value="0" {{ old('j_issue_rsi') ==  "0" ? 'checked' : '' }}>
        <label class="form-check-label" for="j_issue_rsi">No</label>
      </div>
    </div>
  </div><button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection