@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')

    @if(empty($barbers))

        <div class="mb-3">
            <a href="{{ action('BarberController@new') }}" class="btn btn-warning btn-lg" role="button">
                <i class="fas fa-plus-circle"></i>
                New barber
            </a>
        </div>

        <div class="alert alert-danger">
            There are no barbers
        </div>
        
    @else

        <div class="row" style="margin-right: 15px !important; margin-left: 15px !important;">        
            <div class="col-md-12">
                <h1 class="float-left">Barbers</h1>
                <a href="{{ action('BarberController@new') }}" class="btn btn-warning float-right" role="button" style="bottom: 15px; position: absolute; right: 0px;">
                    <i class="fas fa-plus-circle"></i>
                    New barber
                </a>
            </div>
        </div>

        <div class="row" style="margin-right: 15px !important; margin-left: 15px !important;">
            <table class="table table-striped table-bordered table-hover">

                <th class="text-center">Name</th>
                <th class="text-center">Surname</th>
                <th class="text-center">Mon</th>
                <th class="text-center">Tue</th>
                <th class="text-center">Wed</th>
                <th class="text-center">Thu</th>
                <th class="text-center">Fri</th>
                <th class="text-center">Sat</th>
                <th class="text-center">Sun</th>
                <th class="text-center">Options</th>
                    @foreach ($barbers as $barber)
                        <tr>
                            <td class="text-center">{{ $barber->name }}</td>
                            <td class="text-center">{{ $barber->surname }}</td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->mon_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->mon_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->mon_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->mon_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->tue_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->tue_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->tue_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->tue_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->wed_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->wed_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->wed_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->wed_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->thu_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->thu_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->thu_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->thu_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->fri_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->fri_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->fri_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->fri_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->sat_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->sat_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->sat_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->sat_pm_finish }} </small> <br>
                            </td>
                            <td class="text-center">
                                <small> AM Start: {{ $barber->sun_am_start }} </small> <br>
                                <small> AM Start: {{ $barber->sun_am_finish }} </small> <br>
                                <small> PM Start: {{ $barber->sun_pm_start }} </small> <br>
                                <small> PM Start: {{ $barber->sun_pm_finish }} </small> <br>
                            </td>
                            
                            <td class="text-center">
                                <a href="/admin/barber/detailStyles/{{ $barber->id }}" class="btn btn-info btn-xs">
                                    <i class="fa fa-edit"></i>Styles
                                </a>
                                <a href="/admin/barber/edit/{{ $barber->id }}" class="btn btn-primary btn-xs">
                                    <i class="fa fa-edit"></i>Edit
                                </a>
                                <a href="/admin/barber/delete/{{ $barber->id }}" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    @endif

@stop