$(function () {

    "use strict";

    var _mondayStart = setSpecificTime(9, 0);
    var _mondayFinish = setSpecificTime(17, 0);
    var _tuesdayStart = setSpecificTime(9, 0);
    var _tuesdayFinish = setSpecificTime(17, 0);
    var _wednesdayStart = setSpecificTime(9, 0);
    var _wednesdayFinish = setSpecificTime(17, 0);
    var _thursdayStart = setSpecificTime(9, 0);
    var _thursdayFinish = setSpecificTime(17, 0);
    var _fridayStart = setSpecificTime(9, 0);
    var _fridayFinish = setSpecificTime(17, 0);
    var _saturdayStart = setSpecificTime(8, 30);
    var _saturdayFinish = setSpecificTime(17, 0);
    var _sundayStart = setSpecificTime(9, 0);
    var _sundayFinish = setSpecificTime(17, 0);

    var mon_am_start_Edit = "null";
    var mon_am_finish_Edit = "null";
    var mon_pm_start_Edit = "null";
    var mon_pm_finish_Edit = "null";
    var tue_am_start_Edit = "null";
    var tue_am_finish_Edit = "null";
    var tue_pm_start_Edit = "null";
    var tue_pm_finish_Edit = "null";
    var wed_am_start_Edit = "null";
    var wed_am_finish_Edit = "null";
    var wed_pm_start_Edit = "null";
    var wed_pm_finish_Edit = "null";
    var thu_am_start_Edit = "null";
    var thu_am_finish_Edit = "null";
    var thu_pm_start_Edit = "null";
    var thu_pm_finish_Edit = "null";
    var fri_am_start_Edit = "null";
    var fri_am_finish_Edit = "null";
    var fri_pm_start_Edit = "null";
    var fri_pm_finish_Edit = "null";
    var sat_am_start_Edit = "null";
    var sat_am_finish_Edit = "null";
    var sat_pm_start_Edit = "null";
    var sat_pm_finish_Edit = "null";
    var sun_am_start_Edit = "null";
    var sun_am_finish_Edit = "null";
    var sun_pm_start_Edit = "null";
    var sun_pm_finish_Edit = "null";

    $(document).ready(function () {

        $(window).bind('load', function(){

            fillEditValues();

            populateTimeOfDays();

            if($("#id").val() != null){
                runTriggerEventsEdit();
            }
        })
        

        // var hourMinute = moment(mon_am_start_Edit, 'HH:mm A')

        // console.log("ai: " + getValueFromSpecificTime(hourMinute));

        // $("#mon_am_start").val(getValueFromSpecificTime(hourMinute));
        
    });

    function fillEditValues()
    {
        mon_am_start_Edit = stringToMomentHour($("#mon_am_start").val());
        mon_am_finish_Edit = stringToMomentHour($("#mon_am_finish").val());
        mon_pm_start_Edit = stringToMomentHour($("#mon_pm_start").val());
        mon_pm_finish_Edit = stringToMomentHour($("#mon_pm_finish").val());
        
        tue_am_start_Edit = stringToMomentHour($("#tue_am_start").val());
        tue_am_finish_Edit = stringToMomentHour($("#tue_am_finish").val());
        tue_pm_start_Edit = stringToMomentHour($("#tue_pm_start").val());
        tue_pm_finish_Edit = stringToMomentHour($("#tue_pm_finish").val());

        wed_am_start_Edit = stringToMomentHour($("#wed_am_start").val());
        wed_am_finish_Edit = stringToMomentHour($("#wed_am_finish").val());
        wed_pm_start_Edit = stringToMomentHour($("#wed_pm_start").val());
        wed_pm_finish_Edit = stringToMomentHour($("#wed_pm_finish").val());

        thu_am_start_Edit = stringToMomentHour($("#thu_am_start").val());
        thu_am_finish_Edit = stringToMomentHour($("#thu_am_finish").val());
        thu_pm_start_Edit = stringToMomentHour($("#thu_pm_start").val());
        thu_pm_finish_Edit = stringToMomentHour($("#thu_pm_finish").val());

        fri_am_start_Edit = stringToMomentHour($("#fri_am_start").val());
        fri_am_finish_Edit = stringToMomentHour($("#fri_am_finish").val());
        fri_pm_start_Edit = stringToMomentHour($("#fri_pm_start").val());
        fri_pm_finish_Edit = stringToMomentHour($("#fri_pm_finish").val());

        sat_am_start_Edit = stringToMomentHour($("#sat_am_start").val());
        sat_am_finish_Edit = stringToMomentHour($("#sat_am_finish").val());
        sat_pm_start_Edit = stringToMomentHour($("#sat_pm_start").val());
        sat_pm_finish_Edit = stringToMomentHour($("#sat_pm_finish").val());

        sun_am_start_Edit = stringToMomentHour($("#sun_am_start").val());
        sun_am_finish_Edit = stringToMomentHour($("#sun_am_finish").val());
        sun_pm_start_Edit = stringToMomentHour($("#sun_pm_start").val());
        sun_pm_finish_Edit = stringToMomentHour($("#sun_pm_finish").val());
    }

    function runTriggerEventsEdit()
    {
        // Monday
        if(mon_am_start_Edit != "null") {
            
            $("#mon_am_start").val(mon_am_start_Edit);
            $("#mon_am_start").trigger("change");
        }

        if(mon_am_finish_Edit != "null") {
            
            $("#mon_am_finish").val(mon_am_finish_Edit);
            $("#mon_am_finish").trigger("change");
        }
        
        if(mon_pm_start_Edit != "null") {
            
            $("#mon_pm_start").val(mon_pm_start_Edit);
            $("#mon_pm_start").trigger("change");
        }

        if(mon_pm_finish_Edit != "null") {
            
            $("#mon_pm_finish").val(mon_pm_finish_Edit);
            $("#mon_pm_finish").trigger("change");
        }

        // Tuesday
        if(tue_am_start_Edit != "null") {
            
            $("#tue_am_start").val(tue_am_start_Edit);
            $("#tue_am_start").trigger("change");
        }

        if(tue_am_finish_Edit != "null") {
            
            $("#tue_am_finish").val(tue_am_finish_Edit);
            $("#tue_am_finish").trigger("change");
        }
        
        if(tue_pm_start_Edit != "null") {
            
            $("#tue_pm_start").val(tue_pm_start_Edit);
            $("#tue_pm_start").trigger("change");
        }

        if(tue_pm_finish_Edit != "null") {
            
            $("#tue_pm_finish").val(tue_pm_finish_Edit);
            $("#tue_pm_finish").trigger("change");
        }

        // Wednesday
        if(wed_am_start_Edit != "null") {
            
            $("#wed_am_start").val(wed_am_start_Edit);
            $("#wed_am_start").trigger("change");
        }

        if(wed_am_finish_Edit != "null") {
            
            $("#wed_am_finish").val(wed_am_finish_Edit);
            $("#wed_am_finish").trigger("change");
        }
        
        if(wed_pm_start_Edit != "null") {
            
            $("#wed_pm_start").val(wed_pm_start_Edit);
            $("#wed_pm_start").trigger("change");
        }

        if(wed_pm_finish_Edit != "null") {
            
            $("#wed_pm_finish").val(wed_pm_finish_Edit);
            $("#wed_pm_finish").trigger("change");
        }

        // Thursday
        if(thu_am_start_Edit != "null") {
            
            $("#thu_am_start").val(thu_am_start_Edit);
            $("#thu_am_start").trigger("change");
        }

        if(thu_am_finish_Edit != "null") {
            
            $("#thu_am_finish").val(thu_am_finish_Edit);
            $("#thu_am_finish").trigger("change");
        }
        
        if(thu_pm_start_Edit != "null") {
            
            $("#thu_pm_start").val(thu_pm_start_Edit);
            $("#thu_pm_start").trigger("change");
        }

        if(thu_pm_finish_Edit != "null") {
            
            $("#thu_pm_finish").val(thu_pm_finish_Edit);
            $("#thu_pm_finish").trigger("change");
        }

        // Friday
        if(fri_am_start_Edit != "null") {
            
            $("#fri_am_start").val(fri_am_start_Edit);
            $("#fri_am_start").trigger("change");
        }

        if(fri_am_finish_Edit != "null") {
            
            $("#fri_am_finish").val(fri_am_finish_Edit);
            $("#fri_am_finish").trigger("change");
        }
        
        if(fri_pm_start_Edit != "null") {
            
            $("#fri_pm_start").val(fri_pm_start_Edit);
            $("#fri_pm_start").trigger("change");
        }

        if(fri_pm_finish_Edit != "null") {
            
            $("#fri_pm_finish").val(fri_pm_finish_Edit);
            $("#fri_pm_finish").trigger("change");
        }

        // Saturday
        if(sat_am_start_Edit != "null") {
            
            $("#sat_am_start").val(sat_am_start_Edit);
            $("#sat_am_start").trigger("change");
        }

        if(sat_am_finish_Edit != "null") {
            
            $("#sat_am_finish").val(sat_am_finish_Edit);
            $("#sat_am_finish").trigger("change");
        }
        
        if(sat_pm_start_Edit != "null") {
            
            $("#sat_pm_start").val(sat_pm_start_Edit);
            $("#sat_pm_start").trigger("change");
        }

        if(sat_pm_finish_Edit != "null") {
            
            $("#sat_pm_finish").val(sat_pm_finish_Edit);
            $("#sat_pm_finish").trigger("change");
        }

        // Sunday
        if(sun_am_start_Edit != "null") {
            
            $("#sun_am_start").val(sun_am_start_Edit);
            $("#sun_am_start").trigger("change");
        }

        if(sun_am_finish_Edit != "null") {
            
            $("#sun_am_finish").val(sun_am_finish_Edit);
            $("#sun_am_finish").trigger("change");
        }
        
        if(sun_pm_start_Edit != "null") {
            
            $("#sun_pm_start").val(sun_pm_start_Edit);
            $("#sun_pm_start").trigger("change");
        }

        if(sun_pm_finish_Edit != "null") {
            
            $("#sun_pm_finish").val(sun_pm_finish_Edit);
            $("#sun_pm_finish").trigger("change");
        }
    }

    function populateTimeOfDays(){
        
        populateMonday();
        populateTuesday();
        populateWednesday();
        populateThursday();
        populateFriday();
        populateSaturday();
        populateSunday();
    };

    function setSpecificTime(hour, minute)
    {
        return moment().set({
            'year': 2018,
            'month': 1,
            'date': 1,
            'hour': hour,
            'minute': minute,
            'second': 0
        });
    };

    function fillSelectTime(field, startTime, finishTime)
    {
        field.empty();
        field.append("<option value='null' selected>Select the time</option>");

        var enableField = false;

        if(startTime.valueOf() < finishTime.valueOf()) {
            enableField = true;
        }
        
        while (startTime.valueOf() <= finishTime.valueOf()) {
        
            var timeText = getTextFromSpecificTime(startTime);
            var timeValue = getValueFromSpecificTime(startTime);
            
            field.append("<option value="+ timeValue + ">" + timeText +"</option>");

            startTime.add(15, "m");
        }

        if(enableField) {
            field.removeAttr("disabled");
            field.css('cursor', 'pointer');
        }   
    }

    function getTextFromSpecificTime(specificTime)
    {
        return moment(specificTime, "h:mma").format("h:mm A");
    };

    function getValueFromSpecificTime(specificTime)
    {
        var valueFrom = moment(specificTime).get('hour')
            + ":"
            + moment(specificTime).get('minute')
            + ":"
            + moment(specificTime).get('second');

        return valueFrom;
    };

    function stringToMomentHour(value)
    {
        if(value == "null")
            return "null";

        var hourMinute = moment(value, 'HH:mm A');

        return getValueFromSpecificTime(hourMinute);
    };

    function cleanField(field)
    {
        field.attr("disabled", "disabled");
        field.css('cursor', 'not-allowed');
        field.empty();
        field.append("<option value='null' selected>Select the time</option>");
    };

    // EVENTS
    
    // Monday
    function populateMonday()
    {
        // var beginningTime = moment('8:45am', 'h:mma');
        // var endTime = moment('9:00am', 'h:mma');
        // console.log(beginningTime.isBefore(endTime)); // true
        // console.log(beginningTime.toDate()); // Mon May 12 2014 08:45:00
        // console.log(endTime.toDate()); // Mon May 12 2014 09:00:00

        var mondayAMStart = $("#mon_am_start");

        fillSelectTime(mondayAMStart, _mondayStart, _mondayFinish);
    };

    $(document).on('change', '#mon_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        // console.log("epa");
        // console.log(mon_am_start_Edit);

        cleanField($("#mon_am_finish"));
        cleanField($("#mon_pm_start"));
        cleanField($("#mon_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#mon_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _mondayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#mon_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#mon_pm_start"));
        cleanField($("#mon_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#mon_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _mondayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#mon_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#mon_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#mon_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _mondayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Tuesday
    function populateTuesday()
    {
        var tuesdayAMStart = $("#tue_am_start");
        fillSelectTime(tuesdayAMStart, _tuesdayStart, _tuesdayFinish);
    };

    $(document).on('change', '#tue_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#tue_am_finish"));
        cleanField($("#tue_pm_start"));
        cleanField($("#tue_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#tue_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _tuesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#tue_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#tue_pm_start"));
        cleanField($("#tue_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#tue_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _tuesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#tue_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#tue_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#tue_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _tuesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Wednesday
    function populateWednesday()
    {
        var wednesdayAMStart = $("#wed_am_start");
        fillSelectTime(wednesdayAMStart, _wednesdayStart, _wednesdayFinish);
    };
    
    $(document).on('change', '#wed_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#wed_am_finish"));
        cleanField($("#wed_pm_start"));
        cleanField($("#wed_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#wed_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _wednesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#wed_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#wed_pm_start"));
        cleanField($("#wed_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#wed_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _wednesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#wed_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#wed_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#wed_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _wednesdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Thursday
    function populateThursday()
    {
        var thursdayAMStart = $("#thu_am_start");
        fillSelectTime(thursdayAMStart, _thursdayStart, _thursdayFinish);
    };
    
    $(document).on('change', '#thu_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#thu_am_finish"));
        cleanField($("#thu_pm_start"));
        cleanField($("#thu_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#thu_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _thursdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#thu_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#thu_pm_start"));
        cleanField($("#thu_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#thu_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _thursdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#thu_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#thu_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#thu_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _thursdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Friday
    function populateFriday()
    {
        var fridayAMStart = $("#fri_am_start");
        fillSelectTime(fridayAMStart, _fridayStart, _fridayFinish);
    };
    
    $(document).on('change', '#fri_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#fri_am_finish"));
        cleanField($("#fri_pm_start"));
        cleanField($("#fri_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#fri_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _fridayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#fri_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#fri_pm_start"));
        cleanField($("#fri_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#fri_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _fridayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#fri_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#fri_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#fri_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _fridayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Saturday
    function populateSaturday()
    {
        var saturdayAMStart = $("#sat_am_start");
        fillSelectTime(saturdayAMStart, _saturdayStart, _saturdayFinish);
    };
    
    $(document).on('change', '#sat_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sat_am_finish"));
        cleanField($("#sat_pm_start"));
        cleanField($("#sat_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sat_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _saturdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#sat_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sat_pm_start"));
        cleanField($("#sat_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sat_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _saturdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#sat_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sat_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sat_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _saturdayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    // Sunday
    function populateSunday()
    {
        var sundayAMStart = $("#sun_am_start");
        fillSelectTime(sundayAMStart, _sundayStart, _sundayFinish);
    };

    $(document).on('change', '#sun_am_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sun_am_finish"));
        cleanField($("#sun_pm_start"));
        cleanField($("#sun_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sun_am_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _sundayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#sun_am_finish', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sun_pm_start"));
        cleanField($("#sun_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sun_pm_start");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _sundayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });

    $(document).on('change', '#sun_pm_start', function () {

        var timeValue = $(this).find(":selected").val();

        cleanField($("#sun_pm_finish"));

        if(timeValue != "0"
            && timeValue != null
            && timeValue != 'null'){

                var timeText = $(this).find(":selected").text();
                
                var hourMinute = moment(timeText, 'HH:mm A')

                hourMinute.add(15, "m");

                var newHour = hourMinute.get("hour");
                var newMinute = hourMinute.get("minute");

                var nextField = $("#sun_pm_finish");
                var startTime = setSpecificTime(newHour, newMinute);
                var finishTime = _sundayFinish;

                fillSelectTime(nextField, startTime, finishTime);
        }
    });
});