@extends("layouts.front")

<link href='/css/fullcalendar.min.css' rel='stylesheet' />
<link href='/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='/js/moment.min.js' type="text/javascript" ></script>

<link href="/css/custom.css" rel="stylesheet">

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<script src='/js/appointment.js' type="text/javascript"></script>

<div class="container py-3">

    <div class="text-center">
        <h1 class="display-4">Appointments GUEST</h1>
    </div>

    <form class="form-horizontal form-bordered" action="/appointment/client" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="iduser" value="1" />
        <input type="hidden" name="appointmentDay" id="appointmentDay" value="" />

        <div class="form-group" style="margin-bottom: 0; padding-bottom: 0;">
            <div class="col-sm-12">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-form">Style</label>
                        <small class="text-muted">
                            Select to populate the barbers
                        </small>
                        <select name="idstyle" id="idstyle" class="custom-select custom-select-lg mb-3 cursor-Pointer">
                            <option value="0" selected>Select the style</option>
                            @foreach($styles as $style)
                                <option value="{{$style->id}}">{{ $style->st_name . " (" . $style->st_duration . " min. )" }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-form">Barber</label>
                        <select name="idbarber" id="idbarber" class="custom-select custom-select-lg mb-3 cursor-NotAllowed" disabled="disabled">
                            <option value="0" selected>Select the barber</option>
                            @foreach($barbers as $barber)
                                <option value="{{$barber->id}}">{{ $barber->ba_fname . " " . $barber->ba_sname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <a id="btnCheckAvailableDate" class="btn btn-warning btn-lg btn-block" role="button">Check availability</a>
                </div>
                </div>
            </div>
        </div>

        <div id="divAppointmentCalendar" style="display: none;">
            <div class="form-group pt-3" style="margin-bottom: 0; padding-bottom: 0;">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>See below the available dates</h2>
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <div id='calendarClient' class="pt-3 cursor-Pointer sizeCalendar" style="margin: auto;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group pt-3" >
                <div class="col-sm-12">
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach
                            </ul>
                            
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group pt-3" >
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- <label class="label-form">Time <span id="lblSelectedCalendarDay" class="label-SelectedCalendarDay"></span></label> -->
                            <label class="label-form">Time</label>
                            <small id="lblSelectedCalendarDay" class="text-muted">
                                Select to populate the barbers
                            </small>
                            <select class="custom-select custom-select-lg mb-3 cursor-Pointer">
                                <option value="0" selected>Select the time</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group pt-3" >
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="label-form">Name</label>
                            <label class="form-control">Client name</label>                        
                        </div>
                        <div class="col-sm-4">
                            <label class="label-form">Email</label>
                            <label class="form-control">email@client.co</label>
                        </div>
                        <div class="col-sm-4">
                            <label class="label-form">Phone</label>
                            <label class="form-control">02102030104</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group pt-3 mb-5" >
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <button id="btnAppointmentClient" type="submit" class="btn btn-primary" disabled="disabled" style="bottom: 0; position: absolute; width: 100%; cursor: not-allowed;">BOOK</button> -->
                            <button id="btnAppointmentClient" type="submit" class="btn btn-primary btn-lg" style="width: 100%; line-height: 2.5">BOOK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection