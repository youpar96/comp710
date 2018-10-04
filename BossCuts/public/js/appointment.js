$(function () {

    "use strict";

    $(document).ready(function () {

        //loadAppointments();

        // // Today button's press only work here
        // $(".fc-today-button").click(function() {
            
        //     var currentDateCalendar = $("#calendarClient").fullCalendar('getDate').format('Y-MM-DD');
        //     setSelectedCalendarDay(currentDateCalendar);
        // });

        // // To populate SelectedDay when the page run
        // var currentDateCalendar = $("#calendarClient").fullCalendar('getDate').format('Y-MM-DD');
        // setSelectedCalendarDay(currentDateCalendar);
    });

    function loadAppointments(){

        $('#calendarClient').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                //right: 'month,agendaWeek,agendaDay,listWeek'
                right: 'month,agendaDay'
                //right: ''
            },
            validRange: {
                start: moment().add(-1, 'days').toDate(),
                end: moment().add(6, 'weeks').calendar()
            },
            defaultView: 'month',
            defaultDate: moment().toDate(),
            allDaySlot: false,
            minTime: "07:00:00",
            maxTime: "20:00:00",
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            // eventClick: function(calEvent, jsEvent, view) {
                
            //     //alert('Event: ' + calEvent.title);
            //     // console.log(calEvent.id);
            //     // console.log(calEvent.owner);
            //     // console.log(calEvent.start);
            //     // console.log(calEvent.end);
            //     console.log(moment());
            //     // change the border color just for fun
            //     $(this).css('border-color', 'red');
            // },
            dayClick: function(date, jsEvent, view, resourceObj) {

                $('#calendarClient').fullCalendar('gotoDate',date);
                $('#calendarClient').fullCalendar('changeView','agendaDay');

                var currentDateCalendar = date.format('Y-MM-DD');
                setSelectedCalendarDay(currentDateCalendar);
            },
            events: [
                {
                    // Para setar o Id do Appointment
                    id:'13',
                    title: 'All Day Event',
                    start: '2018-10-07',
                    end: '2018-10-10',
                    owner: "others"
                    // Para levar para edição do corte
                    
                }
            ]
        });
    };

    $(document).on('click', '#btnCheckAvailableDate', function () {


        var _style = $("#idstyle");
        var _barber = $("#idbarber");

        var idStyle = _style.find(":selected").val();
        var idBarber = _barber.find(":selected").val();
        var idUser = $("#idUser").val();

        // console.log("style: " + idStyle);
        // console.log("barber " + idBarber);
        // console.log("user " + idUser);

        if(validateCheckAvailability(_style, _barber)) {

            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     type:'POST',
            //     url:'/checkAvailabilityByClient',
            //     data:{
            //         idStyle: idStyle,
            //         idBarber: idBarber,
            //         idUser: idUser
            //     },
            //     success:function(data){
     
            //         //populateBarbers(data.barbers);
            //         console.log(data);
            //     }
            // });
            //console.log("opa");

            // var tolkien = $('meta[name="csrf-token"]').attr('content');

            // var request = $.ajax({
            //     url: "/checkAvailabilityByClient",
            //     method: "POST",
            //     data: {
            //         _token: tolkien
            //     },
            //     dataType: "json"
            // });

            //console.log(request);


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:'/checkAvailabilityByClient',
                data:{
                    //'_token': token,
                    idStyle: idStyle,
                    idBarber: idBarber
                    //idUser: idUser
                },
                success:function(data){
     
                    console.log(data);

                    $("#divAppointmentCalendar").show();

                    // var myArray = [];
                    // var myEvent = new Object();
                    // myEvent.id = 1;
                    // myEvent.title = "Diego Pupato - Mohawk (Big Boss)";
                    // myEvent.start = "2018-10-07 10:15 AM";
                    // myEvent.end = "2018-10-12 10:40 AM";
                    // myEvent.url = "/gallery";
                    // myEvent.owner = "others"
                    // myEvent.color = "others"
                    // myArray.push(myEvent);

                    // myEvent.id = 2;
                    // myEvent.title = "Youngki Park - Mohawk (Big Boss)";
                    // myEvent.start = "2018-10-05 09:00 AM";
                    // myEvent.end = "2018-10-05 09:45 AM";
                    // myEvent.url = "/gallery";
                    // myEvent.owner = "others"
                    // myEvent.color = "others"
                    // myArray.push(myEvent);

                    // var appointments = JSON.stringify(myArray);

                    // $('#calendarClient').fullCalendar('removeEventSource', appointments);
                    // $('#calendarClient').fullCalendar('addEventSource', appointments);
                    // $('#calendarClient').fullCalendar('refetchEvents');

                    fillCalendarFromDatabase(data.barber, data.style, data.user, data.userAppointments, data.nonUserAppointments);


                    //populateBarbers(data.barbers);
                }
            });
        }
    });

    function fillCalendarFromDatabase(barber, style, user, userAppointments, nonUserAppointments)
    {
        var dateLimit = moment().add(6, 'weeks');

        console.log(dateLimit);
        var monAMStart = barber.mon_am_start;
        var monAMFinish = barber.mon_am_finish;
        var monPMStart = barber.mon_pm_start;
        var monPMFinish = barber.mon_pm_finish;


        console.log(moment().day());

        // console.log(monAMStart);
        // console.log(monAMFinish);
        // console.log(monPMStart);
        // console.log(monPMFinish);

        // var monInicio = moment(monAMStart).toDate();
        // var monFim = moment(monAMFinish).toDate();
        var monInicio = moment(monAMStart, ["h:mm A"]).format("HH:mm");
        var monFim = moment(monAMFinish, ["h:mm A"]).format("HH:mm");

        console.log(monInicio);
        console.log(monFim);

        while(monInicio <= monFim){

            $("#appointmentTimeToBook").append("<option value='" + monInicio + "'>" + barber.name + "</option>");
            monInicio.add(10, 'minutes');
        }
        

        // var myArray = [];
        // var myObject = new Object();
        // myObject.id = 1;
        // myObject.title = "Diego Pupato - Mohawk (Big Boss)";
        // myObject.start = "2018-10-07";
        // myObject.end = "2018-10-12";
        // myObject.url = "/removeAppointment";
        // myObject.owner: "others"
        // myObject.color: "others"
        // myArray.push(myObject);

        // myObject.id = 2;
        // myObject.title = "Diego Pupato - Mohawk (Big Boss)";
        // myObject.start = "2018-10-07";
        // myObject.end = "2018-10-12";
        // myObject.url = "/removeAppointment";
        // myArray.push(myObject);

        // var myString = JSON.stringify(myArray);

        // console.log(myString);
    }

    // function setSelectedCalendarDay(selectedDay)
    // {
    //     $("#appointmentDay").val(selectedDay);

    //     var lblSelectedCalendarDay = $("#lblSelectedCalendarDay");
    //     lblSelectedCalendarDay.text("(Day: " + selectedDay + " )");
    // };

    // $(document).on('click', '.fc-prev-button', function () {

    //     var currentDateCalendar = $("#calendarClient").fullCalendar('getDate').format('Y-MM-DD');
    //     setSelectedCalendarDay(currentDateCalendar);
    //  });
     
    // $(document).on('click', '.fc-next-button', function () {

    //     var currentDateCalendar = $("#calendarClient").fullCalendar('getDate').format('Y-MM-DD');
    //     setSelectedCalendarDay(currentDateCalendar);
    //  });

     $(document).on('change', '#idstyle', function () {

        var idStyle = $('#idstyle').find(":selected").val();

        if(idStyle != "0"
            && idStyle != null){
            getBarbersFromStyle(idStyle);
        }
        else {
            $("#idbarber").attr("disabled", "disabled");
            $("#idbarber").css('cursor', 'not-allowed');
            $("#idbarber").empty();
            $("#idbarber").append("<option value='0' selected>Select the barber</option>");
        }
     });

     function getBarbersFromStyle(idStyle){

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/findBarberByStyle',
            data:{
                idStyle: idStyle
            },
            success:function(data){
 
                populateBarbers(data.barbers);
            }
        });
     };
     
     function populateBarbers(barbers)
     {
        var selectBarbers = $("#idbarber");
        selectBarbers.empty();

        if(barbers.length > 0){
            selectBarbers.append("<option value='0' selected>Select the barber</option>");
            
            $.each(barbers, function() {
                selectBarbers.append($("<option />").val(this.id).text(this.name + " " + this.surname));
            });

            selectBarbers.removeAttr("disabled");
            selectBarbers.css('cursor', 'pointer');
        }
        else{
            $("#idbarber").attr("disabled", "disabled");
            $("#idbarber").css('cursor', 'not-allowed');
            selectBarbers.append("<option value='0' selected>No barber for selected style</option>");
        }
     };

    function validateCheckAvailability(style, barber)
    {
        var idStyle = style.find(":selected").val();
        var idBarber = barber.find(":selected").val();

        var retorno = true;

        removeClassValidation(style);
        removeClassValidation(barber);

        if (idStyle == "0"
             || idStyle == null) {
            addClassValidation(style);
            retorno = false;
        }

        if (idBarber == "0"
             || idBarber == null) {
            addClassValidation(barber);
            retorno = false;
        }

        return retorno;
    };

    function addClassValidation(input) {
        $(input).addClass("input-validation-error");
    };

    function removeClassValidation(input) {
        $(input).removeClass("input-validation-error");
    };

});