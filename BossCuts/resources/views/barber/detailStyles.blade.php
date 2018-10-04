@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')



    

    <div class="col-sm-12">
        <form action="/admin/barber/joinStyle" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="idbarber" value="{{ $barber->id }}"/>

            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="form-group">
                        <h1 class="float-left">{{ $barber->name . " " . $barber->surname }}</h1>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Style</label>
                        <select name="idstyle" id="idstyle" class="custom-select custom-select" style="cursor: pointer;">
                            <option value="null" selected>Select the style</option>
                            @foreach ($stylesFree as $style)
                                <option value="{{ $style->id }}">{{ $style->st_name }} ({{ $style->st_duration }} min)</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <a href="{{ action('BarberController@index') }}" class="btn btn-default float-left mr-2">Back to list</a>
                    <button type="submit" class="btn btn-warning float-left">Join</button>
                </div>
            </div>
        </form>

        <div class="row" style="margin-right: 15px !important; margin-left: 15px !important;">
            <table class="table table-striped table-bordered table-hover">

                <th class="text-center">Style</th>
                <th class="text-center">Options</th>
                    @foreach ($stylesBarber as $style)
                        <tr>
                            <td class="text-center">
                                {{ $style->st_name }}
                            </td>
                           
                            <td class="text-center">
                                <form action="/admin/barber/removeStyle" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <input type="hidden" name="id" value="{{ $style->idqualif }}"/>
                                    <input type="hidden" name="idstyle" value="{{ $style->id }}"/>
                                    <input type="hidden" name="idbarber" value="{{ $style->idbarber }}"/>
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>Remove
                                    </button>
                                </form>
                                <!-- <a href="/admin/barber/removeStyle" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Remove
                                </a> -->
                                
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    <div>
</div>



@stop