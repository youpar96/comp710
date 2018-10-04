$(function () {

    "use strict";

    const _mondayStart = setSpecificTime(9, 0);
    const _mondayFinish = setSpecificTime(17, 0);
    const _tuesdayStart = setSpecificTime(9, 0);
    const _tuesdayFinish = setSpecificTime(17, 0);
    const _wednesdayStart = setSpecificTime(9, 0);
    const _wednesdayFinish = setSpecificTime(17, 0);
    const _thursdayStart = setSpecificTime(9, 0);
    const _thursdayFinish = setSpecificTime(17, 0);
    const _fridayStart = setSpecificTime(9, 0);
    const _fridayFinish = setSpecificTime(17, 0);
    const _saturdayStart = setSpecificTime(8, 30);
    const _saturdayFinish = setSpecificTime(17, 0);
    const _sundayStart = setSpecificTime(9, 0);
    const _sundayFinish = setSpecificTime(17, 0);

    $(document).ready(function () {

        // var teste1 = setSpecificTime(9, 0);
        // var teste2 = setSpecificTime(17, 0);

        // fillMondayAMStart($("#mon_am_start"), teste1, teste2);
        // fillMondayAMFinish($("#mon_am_finish"), teste1, teste2);

        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        console.log(time);

        // var myDate = new Date(2018, 01, 01, 09, 00, 00);
        // myDate.setHours(myDate.getHours()+h);

        var d1 = new Date(),
        d2 = new Date(d1);
        d2.setMinutes(d1.getMinutes() + 30);
        alert(d2);
    });

    function fillMondayAMStart(field, startTime, finishTime)
    {
        field.empty();
        field.append("<option value='null' selected>Select the time ! ! !</option>");

        var newTimeStart = startTime.valueOf();
        var newTimeFinish = finishTime.valueOf();
       
        for(var i = newTimeStart; i <= newTimeFinish; i.add(15, 'm'))
        {
            console.log(i);
        }
        // while (startTime.valueOf() <= finishTime.valueOf()) {
        
        //     var timeText = getTextFromSpecificTime(startTime);
        //     var timeValue = getValueFromSpecificTime(startTime);
            
        //     field.append("<option value="+ timeValue + ">" + timeText +"</option>");

        //     startTime.add(15, "m");
        // }
    }

    function fillMondayAMFinish(field, startTime, finishTime)
    {
        field.empty();
        field.append("<option value='null' selected>Select the time ! ! !</option>");
       
        while (startTime.valueOf() <= finishTime.valueOf()) {
        
            var timeText = getTextFromSpecificTime(startTime);
            var timeValue = getValueFromSpecificTime(startTime);
            
            field.append("<option value="+ timeValue + ">" + timeText +"</option>");

            startTime.add(15, "m");
        }
    }

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
});