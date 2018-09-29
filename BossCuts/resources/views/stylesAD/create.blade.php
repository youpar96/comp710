@extends('layouts.admin')
@section('content')

<div class="well"><h1>Create a New Style</h1></div>
@include ('layouts.errors')
@include ('layouts.success')
<div class="container">
<form method="POST" action="{{url('stylesAD')}}" accept-charset="UTF-8" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="st_name" class="col-sm-3 col-form-label">Style Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_name" name="st_name" value="{{ old('st_name') }}" 
        placeholder="Style Name"  maxlength=30 minlength=5>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="st_description" class="col-sm-3 col-form-label">Style Description:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_description" name="st_description" value="{{ old('st_description') }}" 
        placeholder="A more detailed description of the style"  maxlength=100 minlength=3>
    </div>
  </div>  
  
  <div class="form-group row">
    <label for="st_duration" class="col-sm-3 col-form-label">Minutes:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_duration" name="st_duration" value="{{ old('st_duration') }}" 
        placeholder="Must be a multiple of 10 minutes" maxlength=4 minlength=1>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="st_cost" class="col-sm-3 col-form-label">Cost:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_cost" value="{{ old('st_cost') }}" placeholder="Cost" name="st_cost" >
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
</div>
@endsection