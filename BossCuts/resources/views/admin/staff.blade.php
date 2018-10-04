@extends('layouts.admin')
@section('content')
@include ('layouts.errors')
@include ('layouts.success')
<div class="section-heading"><h3>Manage staffs</h3></div>    
<table class="table table-bordered table-light" style="text-align:center;">
    <colgroup>
        <col width="15%">
        <col width="5%">
        <col width="11%">
        <col width="11%">
        <col width="11%">
        <col width="11%">
        <col width="11%">
        <col width="11%">
        <col width="11%">
    </colgroup>
    <thead class="thead-dark">
        <tr>
            <th scope="col" rowspan="3">Name</th>
            <th scope="col" colspan="8">Working Time</th>
        </tr>
        <tr>
            <th scope="col">AM/PM</th>
            <th scope="col">MON</th>
            <th scope="col">TUE</th>
            <th scope="col">WED</th>
            <th scope="col">THU</th>
            <th scope="col">FRI</th>
            <th scope="col">SAT</th>
            <th scope="col">SUN</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barbers as $barber)
        <form action="#" method="post" id="barberForm_{{ $barber->id }}">
            {{csrf_field()}}
            <tr id="barber_{{ $barber->id }}_am" class="thead-dark">
                <td scope="row" rowspan="2">
                    <span id="barber_{{ $barber->id }}_name"> {{ $barber->ba_fname }} {{ $barber->ba_sname }}</span>
                    <input type="text" class="form-control" name="ba_fname" value="{{ $barber->ba_fname }}" style="display:none;">
                    <input type="text" class="form-control" name="ba_sname" value="{{ $barber->ba_sname }}" style="display:none;">
                    <br/>
                    <input type="button" id="editBtn_{{ $barber->id }}" class="btn btn-primary btn-xs" value="Edit" onclick="editName('{{ $barber->id }}');">
                    <br/><br/>
                    <input type="button" class="btn btn-primary btn-xs" value="Update" onclick="manageBarber('U', '{{ $barber->id }}');">
                    <input type="button" class="btn btn-danger btn-xs" value="Delete" onclick="manageBarber('D', '{{ $barber->id }}');">
                </td>
                <th>AM</th>
                <td class="mon">
                    <select name="mon_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="mon_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="tue">
                    <select name="tue_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="tue_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="wed">
                    <select name="wed_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="wed_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="thu">
                    <select name="thu_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="830">08:30</option>
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="thu_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="830">08:30</option>
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="fri">
                    <select name="fri_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="fri_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="sat">
                    <select name="sat_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="sat_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
                <td class="sun">
                    <select name="sun_am_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                    </select>
                    <select name="sun_am_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <!--<option value="830">08:30</option>-->
                        <option value="900">09:00</option>
                        <option value="930">09:30</option>
                        <option value="1000">10:00</option>
                        <option value="1030">10:30</option>
                        <option value="1100">11:00</option>
                        <option value="1130">11:30</option>
                        <option value="1200">12:00</option>
                    </select>
                </td>
            </tr>
            <tr class="thead-dark" id="barber_{{ $barber->id }}_pm">
                <th>PM</th>
                <td class="mon">
                    <select name="mon_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="mon_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="tue">
                    <select name="tue_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="tue_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="wed">
                    <select name="wed_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="wed_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="thu">
                    <select name="thu_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="thu_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="fri">
                    <select name="fri_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="fri_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="sat">
                    <select name="sat_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                    <select name="sat_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
                <td class="sun">
                    <select name="sun_pm_start" class="form-control">
                        <option value="">Start</option>
                        <option value="0">Off</option>
                        <option value="1200">12:00</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select><select name="sun_pm_finish" class="form-control">
                        <option value="">End</option>
                        <option value="0">Off</option>
                        <option value="1230">12:30</option>
                        <option value="1300">13:00</option>
                        <option value="1330">13:30</option>
                        <option value="1400">14:00</option>
                        <option value="1430">14:30</option>
                        <option value="1500">15:00</option>
                        <option value="1530">15:30</option>
                        <option value="1600">16:00</option>
                        <option value="1630">16:30</option>
                        <option value="1700">17:00</option>
                    </select>
                </td>
            </tr>
        </form>
        @endforeach
    </tbody>
</table>
<a href="stylesAD/create" class="btn btn-primary btn-lg">
    <i class="fa fa-plus"></i> 
    New Staff
</a>

<script type="text/javascript">
function editName(id){
    $("#editBtn_" + id).remove();
    $("#barber_" + id + "_name").hide();
    $("#barber_" + id + "_am").find("input").show();
}

function manageBarber(type, id){
    // update
    if(type == "U"){
        if(confirm("Are you sure to update the staff ?")){
            $("#barberForm_" + id).attr("action", "/admin/staff/update/" + id);
            
            $("#barberForm_" + id).submit();
        }else{
            return false;
        }
    }
    // delete
    else if(type == "D"){
        if(confirm("Are you sure to delete the staff ?")){
            $("#barberForm_" + id).attr("action", "/admin/staff/delete/" + id);
            
            $("#barberForm_" + id).submit();
        }else{
            return false;
        }
    }
}

@foreach($barbers as $barber)
// Monday
$("#barber_{{ $barber->id }}_am > .mon > select[name=mon_am_start]").val("{{ $barber->ba_mon_am_start }}");
$("#barber_{{ $barber->id }}_am > .mon > select[name=mon_am_finish]").val("{{ $barber->ba_mon_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .mon > select[name=mon_pm_start]").val("{{ $barber->ba_mon_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .mon > select[name=mon_pm_finish]").val("{{ $barber->ba_mon_pm_finish }}");

// Tuesday
$("#barber_{{ $barber->id }}_am > .tue > select[name=tue_am_start]").val("{{ $barber->ba_tue_am_start }}");
$("#barber_{{ $barber->id }}_am > .tue > select[name=tue_am_finish]").val("{{ $barber->ba_tue_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .tue > select[name=tue_pm_start]").val("{{ $barber->ba_tue_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .tue > select[name=tue_pm_finish]").val("{{ $barber->ba_tue_pm_finish }}");

// Wednesday
$("#barber_{{ $barber->id }}_am > .wed > select[name=wed_am_start]").val("{{ $barber->ba_wed_am_start }}");
$("#barber_{{ $barber->id }}_am > .wed > select[name=wed_am_finish]").val("{{ $barber->ba_wed_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .wed > select[name=wed_pm_start]").val("{{ $barber->ba_wed_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .wed > select[name=wed_pm_finish]").val("{{ $barber->ba_wed_pm_finish }}");

// Thursday
$("#barber_{{ $barber->id }}_am > .thu > select[name=thu_am_start]").val("{{ $barber->ba_thu_am_start }}");
$("#barber_{{ $barber->id }}_am > .thu > select[name=thu_am_finish]").val("{{ $barber->ba_thu_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .thu > select[name=thu_pm_start]").val("{{ $barber->ba_thu_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .thu > select[name=thu_pm_finish]").val("{{ $barber->ba_thu_pm_finish }}");

// Friday
$("#barber_{{ $barber->id }}_am > .fri > select[name=fri_am_start]").val("{{ $barber->ba_fri_am_start }}");
$("#barber_{{ $barber->id }}_am > .fri > select[name=fri_am_finish]").val("{{ $barber->ba_fri_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .fri > select[name=fri_pm_start]").val("{{ $barber->ba_fri_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .fri > select[name=fri_pm_finish]").val("{{ $barber->ba_fri_pm_finish }}");

// Saturday
$("#barber_{{ $barber->id }}_am > .sat > select[name=sat_am_start]").val("{{ $barber->ba_sat_am_start }}");
$("#barber_{{ $barber->id }}_am > .sat > select[name=sat_am_finish]").val("{{ $barber->ba_sat_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .sat > select[name=sat_pm_start]").val("{{ $barber->ba_sat_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .sat > select[name=sat_pm_finish]").val("{{ $barber->ba_sat_pm_finish }}");

// Sunday
$("#barber_{{ $barber->id }}_am > .sun > select[name=sun_am_start]").val("{{ $barber->ba_sun_am_start }}");
$("#barber_{{ $barber->id }}_am > .sun > select[name=sun_am_finish]").val("{{ $barber->ba_sun_am_finish }}");
$("#barber_{{ $barber->id }}_pm > .sun > select[name=sun_pm_start]").val("{{ $barber->ba_sun_pm_start }}");
$("#barber_{{ $barber->id }}_pm > .sun > select[name=sun_pm_finish]").val("{{ $barber->ba_sun_pm_finish }}");
@endforeach
</script>
@endsection