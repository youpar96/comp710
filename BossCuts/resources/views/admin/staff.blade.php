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
        @foreach($staffs as $staff)
        <form action="#" method="post" id="barberForm_{{ $staff->id }}">
            {{csrf_field()}}
            <tr id="barber_{{ $staff->id }}_am" class="thead-dark">
                <td scope="row" rowspan="2">
                    <span id="barber_{{ $staff->id }}_name"> {{ $staff->s_fname }} {{ $staff->s_sname }}</span>
                    <input type="text" class="form-control" name="s_fname" value="{{ $staff->s_fname }}" style="display:none;">
                    <input type="text" class="form-control" name="s_sname" value="{{ $staff->s_sname }}" style="display:none;">
                    <br/>
                    <input type="button" id="editBtn_{{ $staff->id }}" class="btn btn-primary btn-xs" value="Edit" onclick="editName('{{ $staff->id }}');">
                    <br/><br/>
                    <input type="button" class="btn btn-primary btn-xs" value="Update" onclick="manageBarber('U', '{{ $staff->id }}');">
                    <input type="button" class="btn btn-danger btn-xs" value="Delete" onclick="manageBarber('D', '{{ $staff->id }}');">
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
            <tr class="thead-dark" id="barber_{{ $staff->id }}_pm">
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
        <!-- new staff -->
        <form action="#" method="post" id="barberForm_new">
            {{csrf_field()}}
            <tr id="barber_new_am" class="thead-dark" style="display:none;">
                <td scope="row" rowspan="2">
                    <input type="text" class="form-control" name="s_fname" placeholder="First Name" required>
                    <input type="text" class="form-control" name="s_sname" placeholder="Last Name" required>
                    
                    <br/><br/>
                    <input type="button" class="btn btn-primary btn-xs" value="Register" onclick="manageBarber('I', '');">
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
            <tr class="thead-dark" id="barber_new_pm" style="display:none;">
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
    </tbody>
</table>
<a href="javascript:newBarber();" class="btn btn-primary btn-lg" >
    <i class="fa fa-plus"></i> 
    New Staff
</a>

<script type="text/javascript">
function newBarber(){
    $("#barber_new_am").show();
    $("#barber_new_pm").show();
}

function editName(id){
    $("#editBtn_" + id).remove();
    $("#barber_" + id + "_name").hide();
    $("#barber_" + id + "_am").find("input").show();
}

function manageBarber(type, id){
    // insert
    if(type == "I"){
        if($("#barber_new_am").find("input[name=s_fname]").val() == "" || $("#barber_new_am").find("input[name=s_sname]").val() == ""){
            alert("Please enter the new barber's name");
            return;
        }else{
            if(confirm("Are you sure to register the new staff ?")){
                $("#barber_new_am").find("select").each(function(idx){
                    if($("#barber_new_am").find("select").eq(idx).val() == ""){
                        $("#barber_new_am").find("select").eq(idx).val(0);
                    }
                });
                
                $("#barber_new_pm").find("select").each(function(idx){
                    if($("#barber_new_pm").find("select").eq(idx).val() == ""){
                        $("#barber_new_pm").find("select").eq(idx).val(0);
                    }
                });
        
                $("#barberForm_new").attr("action", "/admin/staff/insert");
                
                $("#barberForm_new").submit();
            }
        }
    }
    // update
    else if(type == "U"){
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

@foreach($staffs as $staff)
// Monday
$("#barber_{{ $staff->id }}_am > .mon > select[name=mon_am_start]").val("{{ $staff->mon_am_start }}");
$("#barber_{{ $staff->id }}_am > .mon > select[name=mon_am_finish]").val("{{ $staff->mon_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .mon > select[name=mon_pm_start]").val("{{ $staff->mon_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .mon > select[name=mon_pm_finish]").val("{{ $staff->mon_pm_finish }}");

// Tuesday
$("#barber_{{ $staff->id }}_am > .tue > select[name=tue_am_start]").val("{{ $staff->tue_am_start }}");
$("#barber_{{ $staff->id }}_am > .tue > select[name=tue_am_finish]").val("{{ $staff->tue_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .tue > select[name=tue_pm_start]").val("{{ $staff->tue_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .tue > select[name=tue_pm_finish]").val("{{ $staff->tue_pm_finish }}");

// Wednesday
$("#barber_{{ $staff->id }}_am > .wed > select[name=wed_am_start]").val("{{ $staff->wed_am_start }}");
$("#barber_{{ $staff->id }}_am > .wed > select[name=wed_am_finish]").val("{{ $staff->wed_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .wed > select[name=wed_pm_start]").val("{{ $staff->wed_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .wed > select[name=wed_pm_finish]").val("{{ $staff->wed_pm_finish }}");

// Thursday
$("#barber_{{ $staff->id }}_am > .thu > select[name=thu_am_start]").val("{{ $staff->thu_am_start }}");
$("#barber_{{ $staff->id }}_am > .thu > select[name=thu_am_finish]").val("{{ $staff->thu_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .thu > select[name=thu_pm_start]").val("{{ $staff->thu_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .thu > select[name=thu_pm_finish]").val("{{ $staff->thu_pm_finish }}");

// Friday
$("#barber_{{ $staff->id }}_am > .fri > select[name=fri_am_start]").val("{{ $staff->fri_am_start }}");
$("#barber_{{ $staff->id }}_am > .fri > select[name=fri_am_finish]").val("{{ $staff->fri_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .fri > select[name=fri_pm_start]").val("{{ $staff->fri_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .fri > select[name=fri_pm_finish]").val("{{ $staff->fri_pm_finish }}");

// Saturday
$("#barber_{{ $staff->id }}_am > .sat > select[name=sat_am_start]").val("{{ $staff->sat_am_start }}");
$("#barber_{{ $staff->id }}_am > .sat > select[name=sat_am_finish]").val("{{ $staff->sat_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .sat > select[name=sat_pm_start]").val("{{ $staff->sat_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .sat > select[name=sat_pm_finish]").val("{{ $staff->sat_pm_finish }}");

// Sunday
$("#barber_{{ $staff->id }}_am > .sun > select[name=sun_am_start]").val("{{ $staff->sun_am_start }}");
$("#barber_{{ $staff->id }}_am > .sun > select[name=sun_am_finish]").val("{{ $staff->sun_am_finish }}");
$("#barber_{{ $staff->id }}_pm > .sun > select[name=sun_pm_start]").val("{{ $staff->sun_pm_start }}");
$("#barber_{{ $staff->id }}_pm > .sun > select[name=sun_pm_finish]").val("{{ $staff->sun_pm_finish }}");
@endforeach
</script>
@endsection