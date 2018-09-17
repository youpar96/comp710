@extends('layouts.app')
@section('content')

<div class="well"><h1>Join Boss Cuts</h1></div>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
<form method="POST" action="{{url('jobs')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="j_fname" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="j_fname" name="j_fname" value="{{ old('j_fname') }}" placeholder="This is a required field"  maxlength=30 minlength=3>
      </div>
    </div>
  <div class="form-group row">
    <label for="j_sname" class="col-sm-2 col-form-label">Surname:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="j_sname" name="j_sname" value="{{ old('j_sname') }}" placeholder="This is a required field"  maxlength=30 minlength=3>
    </div>
  </div>  
  <div class="form-group row">
    <label for="j_prefname" class="col-sm-2 col-form-label">Preferred Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="j_prefname" name="j_prefname" value="{{ old('j_prefname') }}" maxlength=30 minlength=3>
    </div>
  </div>  
  <div class="form-group row">
    <label for="j_email" class="col-sm-2 col-form-label">Email Address:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="j_email" value="{{ old('j_email') }}" placeholder="This is a required field" name="j_email" >
    </div>
  </div>  
  <div class="form-group row">
    <label for="j_phone" class="col-sm-2 col-form-label">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="j_phone" value="{{ old('j_phone') }}"placeholder="This is a required field" name="j_phone" >
    </div>
  </div>
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Preferred Contact Method:</legend>
      <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="txt" {{ old('j_pref_cont_meth') == "" ? '' : 'checked' }}>
          <label class="form-check-label" for="j_pref_cont_meth">Text</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="phone" {{ old('j_pref_cont_meth') == "" ? '' : 'checked' }}>
          <label class="form-check-label" for="j_pref_cont_meth">Phone</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="email" {{ old('j_pref_cont_meth') == "" ? '' : 'checked' }}>
          <label class="form-check-label" for="j_pref_cont_meth">Email</label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="j_cover_letter" class="col-sm-2">Tell us about yourself and why you want to join us:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" id="j_cover_letter" name="j_cover_letter" maxlength=1000 ></textarea>
    </div>
  </div>
  <div class="form-group row">
    Please upload your CV in PDF format.
  </div>
  <div class="form-group row">
    <label for ="cvUpload" class="col-sm-2">
       File size less than 2MB.</label>
    <div class= "col-sm-10">
      <input type="file" class="form-control-file" name="cvUpload" id="filehelp" value="{{old('cvUpload')}}" aria-describedby="fileHelp">
    </div>
  </div>
  <div class="form-group row">
    <label for="j_avail_date" class="col-sm-2">Date your could start work:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="j_avail_date" value="{{ old('j_avail_date') }}" name="j_avail_date" >
    </div>
  </div>
    <div class="form-group row">
    <label for="work_type" class="col-sm-2">What type of work are you interested in?: Choose at least one:</label><br>
    <input type="checkbox" id="work_type[]" name="work_type[]" value="fulltime"  {{session('fulltime') == "1" ?  'checked' : ''}} class= "form-check form-check-inline" >Fulltime
    <input type="checkbox" id="work_type[]" name="work_type[]" value="parttime" {{session('parttime') == "1" ?  'checked' : ''}}   class= "form-check form-check-inline">Parttime
    <input type="checkbox" id="work_type[]" name="work_type[]" value="casual" {{session('casual') == "1" ?  'checked' : ''}}   class= "form-check form-check-inline">Casual
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection