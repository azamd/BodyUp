 $(document).ready(function() {
     "use strict";
     /* initialize the external events*/
     function ini_events(ele) {
         ele.each(function() {

             // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
             // it doesn't need to have a start or end
             var eventObject = {
                 title: $.trim($(this).text()) // use the element's text as the event title
             };

             // store the Event Object in the DOM element so we can get to it later
             $(this).data('eventObject', eventObject);

             // make the event draggable using jQuery UI
             $(this).draggable({
                 zIndex: 1070,
                 revert: true, // will cause the event to go back to its
                 revertDuration: 0 //  original position after the drag
             });

         });
     }
     ini_events($('#external-events div.external-event'));

     /* initialize the calendar*/
     //Date for the calendar events (dummy data)
     var date = new Date();
     var d = date.getDate(),
         m = date.getMonth(),
         y = date.getFullYear();
     $('#calendar').fullCalendar({
         header: {
             left: 'prev,next today',
             center: 'title',
             right: 'month,agendaWeek,agendaDay'
         },
         buttonText: {
             prev: "<span class='fa fa-caret-left'></span>",
             next: "<span class='fa fa-caret-right'></span>",
             today: 'today',
             month: 'month',
             week: 'week',
             day: 'day'
         },
         //Random events
         events: [{
             title: 'flexibility with Dominick Willams',
             start: '2015-05-04T07:30:00',
             end: '2015-05-04T09:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Yoga with Clara S.Roberson',
             start: '2015-05-04T09:30:00',
             end: '2015-05-04T10:45:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Meditaion with  Clara S.Roberson',
             start: '2015-05-04T10:45:00',
             end: '2015-05-04T12:00:00',
             allDay: false,
             backgroundColor: "#48CFAD"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-04T12:15:00',
             end: '2015-05-04T14:00:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Power Yoga with Clara S.Roberson',
             start: '2015-05-04T16:00:00',
             end: '2015-05-04T17:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Yoga with Karen S. Sotelo',
             start: '2015-05-04T18:00:00',
             end: '2015-05-04T19:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Power Yoga with Clara S.Roberson',
             start: '2015-05-04T19:00:00',
             end: '2015-05-04T20:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Power Yoga with Clara S.Roberson',
             start: '2015-05-05T06:30:00',
             end: '2015-05-05T07:30:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-05T07:30:00',
             end: '2015-05-05T08:30:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-05T08:30:00',
             end: '2015-05-05T09:30:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Aerobics with Karen M.Sotelo',
             start: '2015-05-05T09:30:00',
             end: '2015-05-05T10:30:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Yoga with Clara S.Roberson',
             start: '2015-05-05T12:00:00',
             end: '2015-05-04T014:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Power Yoga with Clara S.Roberson',
             start: '2015-05-05T18:00:00',
             end: '2015-05-05T19:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Flexibility with Ervin Patrick',
             start: '2015-05-05T19:30:00',
             end: '2015-05-05T20:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Workout with John doe',
             start: '2015-05-06T06:30:00',
             end: '2015-05-06T08:00:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Flexibility with Ervin Patrick',
             start: '2015-05-06T09:30:00',
             end: '2015-05-06T10:45:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Meditaion with Clara S.Roberson',
             start: '2015-05-06T10:45:00',
             end: '2015-05-06T12:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-06T12:00:00',
             end: '2015-05-06T14:00:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Flexibility with Dominick Willams',
             start: '2015-05-06T16:00:00',
             end: '2015-05-06T18:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Meditaion with Clara S.Roberson',
             start: '2015-05-06T19:00:00',
             end: '2015-05-06T20:00:00',
             allDay: false,
             backgroundColor: "#48CFAD"
         }, {
             title: 'Boot Camp with Matthew B.Smith',
             start: '2015-05-07T06:30:00',
             end: '2015-05-07T07:30:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Aerobics with Karen M.Sotelo',
             start: '2015-05-07T07:30:00',
             end: '2015-05-07T09:00:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Flexibility with Ervin Patrick',
             start: '2015-05-07T09:00:00',
             end: '2015-05-07T010:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Aerobics with Karen M.Sotelo',
             start: '2015-05-07T10:30:00',
             end: '2015-05-07T12:00:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-07T12:00:00',
             end: '2015-05-07T13:30:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Yoga with Clara S.Roberson',
             start: '2015-05-07T18:00:00',
             end: '2015-05-07T19:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Body Building with Matthew B.Smith',
             start: '2015-05-07T19:00:00',
             end: '2015-05-07T20:00:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Flexibility with Dominick Willams',
             start: '2015-05-08T07:30:00',
             end: '2015-05-08T08:30:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-08T12:15:00',
             end: '2015-05-08T08:00:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Aerobics with Karen M.Sotelo',
             start: '2015-05-08T08:30:00',
             end: '2015-05-08T09:30:00',
             allDay: false,
             backgroundColor: "#A0D468"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-08T09:30:00',
             end: '2015-05-08T10:45:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Flexibility with Matthew B.Smith',
             start: '2015-05-08T19:00:00',
             end: '2015-05-08T20:00:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Power Yoga with Clara S.Roberson',
             start: '2015-05-09T08:15:00',
             end: '2015-05-09T09:45:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Body Building with Ervin Patrick',
             start: '2015-05-09T10:00:00',
             end: '2015-05-09T11:00:00',
             allDay: false,
             backgroundColor: "#FD9883"
         }, {
             title: 'Power Yoga with Karen M.Sotelo',
             start: '2015-05-09T09:30:00',
             end: '2015-05-09T10:45:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Flexibility with Clara S.Roberson',
             start: '2015-05-09T11:30:00',
             end: '2015-05-09T12:45:00',
             allDay: false,
             backgroundColor: "#FFCE54"
         }, {
             title: 'Meditaion with Dominick Willams',
             start: '2015-05-09T13:00:00',
             end: '2015-05-09T14:00:00',
             allDay: false,
             backgroundColor: "#48CFAD"
         }, {
             title: 'Power Yoga with Karen M.Sotelo',
             start: '2015-05-09T16:30:00',
             end: '2015-05-09T18:00:00',
             allDay: false,
             backgroundColor: "#4FC1E9"
         }, {
             title: 'Meditaion by  Clara S.Roberson',
             start: '2015-05-07T10:00:00',
             end: '2015-05-07T12:30:00',
             backgroundColor: "#FFCE54"
         }],
         editable: true,
         droppable: true, // this allows things to be dropped onto the calendar !!!
         drop: function(date, allDay) { // this function is called when something is dropped

             // retrieve the dropped element's stored Event Object
             var originalEventObject = $(this).data('eventObject');

             // we need to copy it, so that multiple events don't have a reference to the same object
             var copiedEventObject = $.extend({}, originalEventObject);

             // assign it the date that was reported
             copiedEventObject.start = date;
             copiedEventObject.end = date;
             copiedEventObject.backgroundColor = $(this).css("background-color");
             copiedEventObject.borderColor = $(this).css("border-color");

             // render the event on the calendar
             // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
             $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

             // is the "remove after drop" checkbox checked?
             if ($('#drop-remove').is(':checked')) {
                 // if so, remove the element from the "Draggable Events" list
                 $(this).remove();
             }

         }
     });

     /* ADDING EVENTS */
     var currColor = "#4FC1E9"; //default
     //Color chooser button
     var colorChooser = $("#color-chooser-btn");
     $("#color-chooser > li > a").click(function(e) {
         e.preventDefault();
         //Save color
         currColor = $(this).css("background-color");
         //Add color effect to button
         colorChooser
             .css({
                 "background-color": currColor,
                 "border-color": currColor
             })
             .html($(this).text() + ' <span class="caret"></span>');
     });
     $("#add-new-event").on('click', function(e) {
         e.preventDefault();
         //Get value and make sure it is not null
         var val = $("#new-event").val();
         if (val.length == 0) {
             return;
         }

         //Create event
         var event = $("<div />");
         event.css({
             "background-color": currColor,
             "border-color": currColor,
             "color": "#fff"
         }).addClass("external-event");
         event.html(val);
         $('#external-events').prepend(event);

         //Add draggable funtionality
         ini_events(event);

         //Remove event from text input
         $("#new-event").val("");
     });
 });
