@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')

<form action="/admin/barber/confirmDelete" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ $barber->id }}"/>
    <input type="hidden" name="name" value="{{ $barber->name }}"/>
    <input type="hidden" name="surname" value="{{ $barber->surname }}"/>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <h1 class="float-left">{{ $barber->name . " " . $barber->surname }}</h1>
                </div>
            </div>
        </div>

        <div class="row" style="margin-right: 15px !important; margin-left: 15px !important;">
            <table class="table table-striped table-bordered table-hover">

                <th class="text-center">Mon</th>
                <th class="text-center">Tue</th>
                <th class="text-center">Wed</th>
                <th class="text-center">Thu</th>
                <th class="text-center">Fri</th>
                <th class="text-center">Sat</th>
                <th class="text-center">Sun</th>
                        <tr>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->mon_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->mon_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->mon_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->mon_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->tue_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->tue_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->tue_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->tue_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->wed_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->wed_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->wed_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->wed_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->thu_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->thu_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->thu_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->thu_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->fri_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->fri_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->fri_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->fri_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->sat_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->sat_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->sat_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->sat_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->sun_am_start }} </small> <br>
                                <small> AM Finish: {{ $barber->sun_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->sun_pm_start }} </small> <br>
                                <small> PM Finish: {{ $barber->sun_pm_finish }} </small> <br>
                            </td>
                        </tr>
            </table>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    Are you sure you want to delete this barber?
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('BarberController@index') }}" class="btn btn-default float-left mr-2">Back to list</a>
                <button type="submit" class="btn btn-danger float-left">Delete</button>
            </div>
        </div>
    <div>

        
    </div>

</form> 

@stop