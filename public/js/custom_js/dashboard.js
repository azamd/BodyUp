"use strict";
$(document).ready(function() {
    $(".newstick").easyTicker({
        direction: 'up',
        speed: 'slow',
        interval: 1500,
        height: 'auto',
        visible: 0,
        mousePause: 1
    });

    $('.progress .progress-bar').progressbar();
    d3.select("#fillgauge1").call(d3.liquidfillgauge, 26.7, {
        circleColor: "#65a800",
        textColor: "#65a800",
        waveTextColor: "#65a800",
        waveColor: "#65a800",
        circleThickness: 0.1,
        circleFillGap: 0,
        textVertPosition: 0.5,
        waveAnimateTime: 2000,
        waveHeight: 0.3,
        waveCount: 1,
        displayPercent: false
    });
    d3.select("#fillgauge3").call(d3.liquidfillgauge, 70, {
        circleColor: "#fc7070",
        textColor: "#fc7070",
        waveTextColor: "#fc7070",
        waveColor: "#fc9370",
        circleThickness: 0.1,
        circleFillGap: 0,
        textVertPosition: 0.8,
        waveAnimateTime: 2000,
        waveHeight: 0.3,
        waveCount: 1,
        displayPercent: false
    });
    d3.select("#fillgauge2").call(d3.liquidfillgauge, 48, {
        circleColor: "#33a4d8",
        textColor: "#33a4d8",
        waveTextColor: "#33a4d8",
        waveColor: "#33a4d8",
        circleThickness: 0.1,
        circleFillGap: 0,
        textVertPosition: 0.8,
        waveAnimateTime: 2000,
        waveHeight: 0.05,
        waveCount: 1,
        displayPercent: false
    });

    //growth analytics chart
    var lineChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            fill: true,
            label: "Previous Year",
            fillColor: "rgba(255,147,29,0.7)",
            strokeColor: "rgba(255,147,29,0.7)",
            data: [205, 198, 180, 150, 130, 140, 160, 155, 125, 135, 132, 124]
        }]

    };

    window.onload = function() {
        var $cvs = $('#myChart');

        if (window.devicePixelRatio != 1) {
            $cvs.removeAttr('width');
            $cvs.removeAttr('height');
        }

        var ctx = $cvs.get(0).getContext('2d');
        window.myLine = new Chart(ctx).Line(lineChartData, {
            responsive: true,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: false,
            scaleOverride: true,
            scaleSteps: 5,
            scaleStepWidth: 25,
            pointDot: false,
            scaleLineWidth: 5,
            scaleStartValue: 80,
            scaleFontColor: "rgba(52, 52, 52, 1)",
            scaleLineColor: 'transparent',
            tooltipFillColor: "#f7f7f7",
            tooltipFontColor: "rgba(255,147,29,0.7)",
            tooltipCaretSize: 2,
            tooltipCornerRadius: 5,
            tooltipYPadding: 10,
            tooltipXPadding: 10,
            scaleFontSize: 12
        });
    };

    //  sleep analytics chart //
    var d11 = [
        ["Mon", 6],
        ["Tue", 7],
        ["Wed", 8],
        ["Thu", 6],
        ["Fri", 8],
        ["Sat", 6],
        ["Sun", 7]
    ];

    $.plot("#bar-chart-stacked", [{
        data: d11,
        label: "Sleeping Hours Per Day",
        color: "#33a4d8",
        yaxis: {
            tickLength: 0
        },
        xaxis: {
            tickLength: 0
        }
    }, ], {
        series: {
            stack: !0,
            bars: {
                align: "center",
                lineWidth: 0,
                show: !0,
                barWidth: .5,
                fill: .9
            }

        },
        grid: {
            borderWidth: 0,
            hoverable: !0
        },
        legend: {
            container: '#basicFlotLegend',
            show: true
        },
        tooltip: !0,
        tooltipOpts: {
            content: "%x : %y",
            defaultTheme: true,
            tickLength: 0
        },
        xaxis: {
            tickColor: "#ddd",
            mode: "categories",
            tickLength: 0
        },
        yaxis: {
            tickColor: "#fff"
        },
        shadowSize: 0
    });
    // sleep analytics chart end
});
