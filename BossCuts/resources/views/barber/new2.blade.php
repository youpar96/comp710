@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')

<form action="/admin/barber/save" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    NOVA TELA 2
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('nome') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Surname</label>
                    <input name="surname" type="text" class="form-control" value="{{ old('nome') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                    <h1 style="font-size: 2rem;">Monday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="mon_am_start" id="mon_am_start" class="custom-select custom-select" style="cursor: pointer;">
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="mon_am_finish" id="mon_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="mon_pm_start" id="mon_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="mon_pm_finish" id="mon_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                <h1 style="font-size: 2rem;">Tuesday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="tue_am_start" id="tue_am_start" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="tue_am_finish" id="tue_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="tue_pm_start" id="tue_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="tue_pm_finish" id="tue_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                    <h1 style="font-size: 2rem;">Wednesday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="wed_am_start" id="wed_am_start" class="custom-select custom-select cursor-NotAllowed" >
                        <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="wed_am_finish" id="wed_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="wed_pm_start" id="wed_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="wed_pm_finish" id="wed_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                <h1 style="font-size: 2rem;">Thursday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="thu_am_start" id="thu_am_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="thu_am_finish" id="thu_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="thu_pm_start" id="thu_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="thu_pm_finish" id="thu_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                <h1 style="font-size: 2rem;">Friday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="fri_am_start" id="fri_am_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="fri_am_finish" id="fri_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="fri_pm_start" id="fri_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="fri_pm_finish" id="fri_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                <h1 style="font-size: 2rem;">Saturday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="sat_am_start" id="sat_am_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[1] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="sat_am_finish" id="sat_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[1] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="sat_pm_start" id="sat_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[1] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="sat_pm_finish" id="sat_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[1] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="width: 13%; padding-right: 5px; padding-left: 5px;">
                <div class="form-group text-center">
                    <h1 style="font-size: 2rem;">Sunday</h1>
                </div>

                <div class="form-group">
                    <label>Start AM</label>
                    <select name="sun_am_start" id="sun_am_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish AM</label>
                    <select name="sun_am_finish" id="sun_am_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Start PM</label>
                    <select name="sun_pm_start" id="sun_pm_start" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Finish PM</label>
                    <select name="sun_pm_finish" id="sun_pm_finish" class="custom-select custom-select cursor-NotAllowed" >
                    <option value="null" selected>Select the time</option>
                        @foreach ($dates[0] as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('BarberController@index') }}" class="btn btn-default float-left mr-2">Back to list</a>
                <button type="submit" class="btn btn-success float-left">Save</button>
            </div>
        </div>
    <div>

        
    </div>

</form> 

@stop