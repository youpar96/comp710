@extends('layouts.admin')
@section('content')

<div class="well"><h1>Edit an Existing Style</h1></div>
@include ('layouts.errors')
@include ('layouts.success')

<!-- Admin Creates edits  styles here  -->
<!-- Basic HTML validation is used here  -->

<div class="container">
<form method="POST" action="{{action('StylesADController@update',$id)}}">
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PATCH">
  <div class="form-group row">
    <label for="st_name" class="col-sm-3 col-form-label">Style Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_name" name="st_name" value="{{$style->st_name }}" 
        placeholder="Style Name"  maxlength=30 minlength=3 required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="st_description" class="col-sm-3 col-form-label">Style Description:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="st_description" name="st_description" value="{{$style->st_description }}" 
        placeholder="A more detailed description of the style"  maxlength=100 minlength=10 required>
    </div>
  </div>  
  
  <div class="form-group row">
    <label for="st_duration" class="col-sm-3 col-form-label">Minutes:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="st_duration" name="st_duration" value="{{$style->st_duration }}" 
        placeholder="Must be a multiple of 10 minutes" maxlength=4 minlength=1 required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="st_cost" class="col-sm-3 col-form-label">Cost:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="st_cost" value="{{$style->st_cost }}" 
        placeholder="Cost" name="st_cost" required>
    </div>
  </div> 
  <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection