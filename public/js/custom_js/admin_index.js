"use-strict"

$(document).ready(function() {
    $(".newstick").easyTicker({
        direction: 'down',
        speed: 'slow',
        interval: 1500,
        height: 'auto',
        visible: 0,
        mousePause: 1
    });
    //pie chart
    $('#myStat2').circliful({
        animation: 1,
        animationStep: 5,
        foregroundBorderWidth: 20,
        backgroundBorderWidth: 20,
        percent: 70,
        // textSize: 40,
        backgroundColor: '#f7f7f7',
        foregroundColor: '#33a4d8',
        textStyle: 'font-size: 20px;',
        textColor: '#666',
    });
    $('#myStat3').circliful({
        animation: 1,
        animationStep: 5,
        foregroundBorderWidth: 20,
        backgroundBorderWidth: 20,
        percent: 85,
        // textSize: 40,
        backgroundColor: '#f7f7f7',
        foregroundColor: '#65a800',
        textStyle: 'font-size: 20px;',
        textColor: '#666',
    });
    //pie chart ends
    //progress bar
    $(".progress-bar-success").animate({
        width: "90%"
    }, 4200);
    $(".progress-bar-primary").animate({
        width: "70%"
    }, 4200);
    $('.progress #pending.progress-bar').progressbar({
        transition_delay: 300
    });
    $('.progress #users.progress-bar').progressbar({
        transition_delay: 300
    });
    //progress bar ends
    //user countup
    var useOnComplete = false,
        useEasing = false,
        useGrouping = false,
        options = {
            useEasing: useEasing, // toggle easing
            useGrouping: useGrouping, // 1,000,000 vs 1000000
            separator: ',', // character to use as a separator
            decimal: '.' // character to use as a decimal
        }

    var count = new CountUp("myTargetElement4.2", 0, 1200, 0, 4, options);
    var count1 = new CountUp("myTargetElement4.1", 0, 900, 0, 4, options);
    var count2 = new CountUp("userscount", 0, 8527, 0, 4, options);
    var count3 = new CountUp("fb", 0, 21836, 0, 4, options);
    var count4 = new CountUp("tw", 0, 8613, 0, 4, options);
    var count5 = new CountUp("fifty", 0, 90, 0, 5, options);
    count5.start();
    var output = new CountUp("pending_amount", 0, 70, 0, 5, options);
    output.start();
    var my_posts = $("[rel=tooltip]");
    var size = $(window).width();
    for (i = 0; i < my_posts.length; i++) {
        the_post = $(my_posts[i]);

        if (the_post.hasClass('invert') && size >= 767) {
            the_post.tooltip({
                placement: 'left'
            });
            the_post.css("cursor", "pointer");
        } else {
            the_post.tooltip({
                placement: 'right'
            });
            the_post.css("cursor", "pointer");
        }
    }

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
    var users = 0,
        fb = 0,
        tw = 0;
    var winbottom = $(window).scrollTop() + $(window).height();
    var fbcountoffset = $("#fb").offset();
    var twcountoffset = $("#tw").offset();
    $(window).on("scroll", function() {
        if (isScrolledIntoView("#userscount") && users == 0) {
            start_usercountup();
        }
        if (isScrolledIntoView("#fb") && fb == 0) {
            count3.start();
            fb = 1;
        }
        if (isScrolledIntoView("#tw") && tw == 0) {
            count4.start();
            tw = 1;
        }
        if (users == 1 && fb == 1 && tw == 1) {
            $(window).off("scroll");
        }
    });

    function start_usercountup() {
        count.start();
        count1.start();
        count2.start();
        users = 1;
    }
    setTimeout(function() {
        if (isScrolledIntoView("#userscount") && users == 0) {
            start_usercountup();
        }
        if (isScrolledIntoView("#fb") && fb == 0) {
            count3.start();
            fb = 1;
        }
        if (isScrolledIntoView("#tw") && tw == 0) {
            count4.start();
            tw = 1;
        }
    }, 1000);

    // user countup end
    //growth analytics chart end

    // Calendar 
    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
        header: {
            left: 'title',
            right: 'prev,next'
        },
        //Random events

        editable: false,
        droppable: false,
        height: 450
    });
    // Calendar end
    // area chart
    var monthnames = ["","Jan", "", "Mar", "", "May", "", "Jul", "", "Sep", "", "Nov", "Dec"];
    var tickvals = [];
    for (var i = 0; i < 111; i++) {
        tickvals.push(i);
    }
    nv.addGraph(function() {
        var linechart = nv.models.lineChart();
        linechart.xAxis
            .axisLabel('Months').tickValues(tickvals)
            .tickFormat(function(d) {
                return monthnames[d];
            });
        linechart.yAxis
            .axisLabel('Growth(%)')
            .tickFormat(d3.format('.02f'));
        var myData = sinAndCos();
        linechart.forceY([0, 8]);
        d3.select('#chart svg')
            .datum(myData)
            .call(linechart);
        nv.utils.windowResize(function() {
            linechart.update();
        });
        $(".sidebar-toggle").click(function() {
            $("#chart svg").remove();
            $("#chart").html("<svg></svg>");
            d3.select('#chart svg')
                .datum(myData)
                .call(linechart);
            linechart.update();
        });
        return linechart;
    });

    function sinAndCos() {
        var sin = [],
            sin2 = [],
            cos = [];
        for (var i = 0; i < 121; i++) {
            sin.push({ x: i / 10, y: Math.cos(i / 9) + 6 });
            sin2.push({ x: i / 10, y: Math.cos(i / 14) + 4.5 });
        }
        return [{
            values: sin,
            key: 'Present',
            color: '#428bca',
            area: true
        }, {
            values: sin2,
            key: 'Previous',
            color: '#22d69d',
            area: true
        }];
    }
    // area chart end
    /*Stacked/Grouped Multi-Bar chart start*/
    var test_data = [{
        "key": "Enquired Users",
        "color": "#4fc1e9",
        "values": [
            { "x": 1, "y": 130 },
            { "x": 2, "y": 110 },
            { "x": 3, "y": 85 },
            { "x": 4, "y": 50 },
            { "x": 5, "y": 80 },
            { "x": 6, "y": 120 },
            { "x": 7, "y": 135 },
            { "x": 8, "y": 53 },
            { "x": 9, "y": 86 },
            { "x": 10, "y": 103 },
            { "x": 11, "y": 120 },
            { "x": 12, "y": 53 }
        ]
    }, {
        "key": "Enrolled Users",
        "color": "#A0D468",
        "values": [
            { "x": 1, "y": 60 },
            { "x": 2, "y": 45 },
            { "x": 3, "y": 60 },
            { "x": 4, "y": 33 },
            { "x": 5, "y": 50 },
            { "x": 6, "y": 42 },
            { "x": 7, "y": 62 },
            { "x": 8, "y": 40 },
            { "x": 9, "y": 55 },
            { "x": 10, "y": 70 },
            { "x": 11, "y": 50 },
            { "x": 12, "y": 45 }
        ]
    }];

    nv.addGraph(function() {
        var barchart = nv.models.multiBarChart().groupSpacing(0.1).stacked(true);
        barchart.xAxis
            .axisLabel('Months')
            .tickFormat(d3.format(',f'));
        barchart.yAxis
            .axisLabel('Users')
            .tickFormat(d3.format(',.1f'));
        d3.select('#chart2 svg')
            .datum(test_data)
            .transition().duration(500)
            .call(barchart);
        nv.utils.windowResize(function() {
            barchart.update();
        });
        $(".sidebar-toggle").click(function() {
            $("#chart2 svg").remove();
            $("#chart2").html("<svg></svg>");
            d3.select('#chart2 svg')
                .datum(test_data)
                .call(barchart);
            barchart.update();
        });
        return barchart;
    });
    /*Stacked/Grouped Multi-Bar chart start*/
    // events section start    
    $("#eventstartdate,#eventenddate").inputmask("dd/mm/yyyy", {
        "placeholder": "dd/mm/yyyy"
    });
    var editingevent = 0;
    var editingelement;
    $("#add-new-event").on("click", function() {
        var values = $(this).closest(".modal-content");
        if (values.find("#new-event").val().trim() == "") {
            swal({
                title: "Warning",
                text: "Event heading should not be empty",
                type: "error",
                allowOutsideClick: false
            });
        } else {
            var evturl = values.find("#event_url").val();
            if (evturl == '') {
                evturl = "event_item.html";
            }
            var evtimg = values.find("#event_img").val();
            if (evtimg == '') {
                evtimg = "img/admin/event1.png";
            }
            var startdate = moment(values.find("#eventstartdate").val(), "DD/MM/YYYY");
            var enddate = moment(values.find("#eventenddate").val(), "DD/MM/YYYY");
            if (startdate > enddate) {
                var temp = startdate;
                startdate = enddate;
                enddate = temp;
            }
            var date = startdate.format("DD / MM / YYYY") + ' - ' + enddate.format("DD / MM / YYYY");
            if (startdate.format("DD / MM / YYYY") == "Invalid date") {
                date = enddate.format("DD / MM / YYYY");
            }
            if (enddate.format("DD / MM / YYYY") == "Invalid date") {
                date = startdate.format("DD / MM / YYYY");
            }
            if (startdate.format("DD / MM / YYYY") == "Invalid date" && enddate.format("DD / MM / YYYY") == "Invalid date") {
                date = '';
            }
            var newevent = '<a href=' + evturl + '><div class="row"><img src="' + evtimg + '" class="recent-user-img" alt="image not found"><h5> ' + values.find("#new-event").val() + ' </h5><small> ' + date + ' </small><span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></div></a>';
            if (editingevent == 0) {
                $(".events_hover").append(newevent);
                swal({
                    title: "Success",
                    text: "Successfully Added Event",
                    type: "success",
                    allowOutsideClick: false
                });
            } else {
                editingelement.after(newevent);
                editingelement.remove();
                editingevent = 0;
                swal({
                    title: "Success",
                    text: "Successfully Edited Event",
                    type: "success",
                    allowOutsideClick: false
                });
            }

            $("#myModal").modal("hide");
        }
    });
    $('#myModal').on('hide.bs.modal', function() {
        $("#myModal").find("form").trigger("reset");
    });
    $(".events_hover").slimScroll({
        height: '285px',
        size: "3px",
        color: '#f9f9f9'
    });
    $(".events_hover").on("click", ".edit_event", function(e) {
        e.preventDefault();
        editingevent = 1;
        editingelement = $(this).closest("a");
        var value = $("#myModal").find(".modal-content");
        value.find("#new-event").val($(this).closest(".row").find("h5").text());
        value.find("#event_url").val($(this).closest("a").attr("href"));
        value.find("#event_img").val($(this).closest(".row").find("img").attr("src"));
        value.find("#eventstartdate").val($(this).closest(".row").find("small").text().split("-")[0]);
        value.find("#eventenddate").val($(this).closest(".row").find("small").text().split("-")[1]);
    });
    $(".events_hover").on("click", ".delete_event", function(e) {
        e.preventDefault();
        $this = $(this);
        swal({
            title: "Delete?",
            text: "Are you sure want to delete this event",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes",
            confirmButtonColor: "#33a4d8",
            cancelButtonColor: "#fc7070",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function() {
            $this.closest("a").remove();
        });
    });
    // events section end
    //calender

    var eventDates = [1, 10, 12, 22],
        $picker = $('#custom-cells'),
        $content = $('#custom-cells-events'),
        sentences = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'Ratio quidem vestra sic cogit. Illi enim inter se dissentiunt. ',
            'Duo Reges: constructio interrete, A mene tu? Ea possunt paria non esse.',
            'Poterat autem inpune; Qui est in parvis malis. '
        ]
    $picker.datepicker({
        language: 'en',
        onRenderCell: function(date, cellType) {
            var currentDate = date.getDate();
            if (cellType == 'day' && eventDates.indexOf(currentDate) != -1) {
                return {
                    html: currentDate + '<span class="dp-note"></span>'
                }
            }
        },
        onSelect: function onSelect(fd, date) {
            var title = '',
                content = '';
            if (date && eventDates.indexOf(date.getDate()) != -1) {
                title = fd;
                content = sentences[Math.floor(Math.random() * eventDates.length)];
            }
            $('strong', $content).html(title);
            $('p', $content).html(content);
        }
    });
    var currentDate = new Date();
    $picker.data('datepicker').selectDate(new Date(currentDate.getFullYear(), currentDate.getMonth(), 10));
});
