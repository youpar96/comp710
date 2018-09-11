@extends('layouts.app')
@section('content')

<div class="well"><h4>Join Boss Cuts</h4></div>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
<form method="POST" action="{{url('jobs')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="j_fname">First Name:</label>
      <input type="text" class="form-control" id="j_fname" name="j_fname" placeholder="This is a required field"  maxlength=30 minlength=3>
    </div>
  <div class="form-group">
    <label for="j_sname">Surname:</label>
    <input type="text" class="form-control" id="j_sname" name="j_sname" placeholder="This is a required field"  maxlength=30 minlength=3>
  </div>  
  <div class="form-group">
    <label for="j_prefname">Preferred Name:</label>
    <input type="text" class="form-control" id="j_prefname" name="j_prefname" placeholder="This is a required field"  maxlength=30 minlength=3>
  </div>  
  <div class="form-group">
    <label for="j_email">Email Address:</label>
    <input type="text" class="form-control" id="j_email" placeholder="This is a required field" name="j_email" >
  </div>  
  <div class="form-group">
    <label for="j_phone">Phone:</label>
    <input type="text" class="form-control" id="j_phone" placeholder="This is a required field" name="j_phone" >
  </div> 
  <div class="radio">
    <label><input type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="txt">Text</label>
    <label><input type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="phone">Phone</label>
    <label><input type="radio" id="j_pref_cont_meth"name="j_pref_cont_meth" value="email">Email</label>
  </div>
  
  <div class="form-group">
    <label for="j_cover_letter">Cover Letter:</label>
    <textarea class="form-control" rows="5" id="j_cover_letter" name="j_cover_letter" maxlength=1000 ></textarea>
  </div>  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection