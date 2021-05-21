"use strict";
//datatables

$(document).ready(function() {
    $('#fitness-table').DataTable();
    var d11 = [
        ["Jan", 28],
        ["Feb", 48],
        ["Mar", 50],
        ["Apr", 28],
        ["May", 48],
        ["Jun", 58],
        ["Jul", 50],
        ["Aug", 60]
    ];
    $.plot("#bar-chart-stacked", [{
        data: d11,
        color: "#ffa31d",
        yaxis: {
            tickLength: 0
        },
        xaxis: {
            tickLength: 0
        }
    }], {
        series: {
            bars: {
                align: "center",
                lineWidth: 0,
                show: !0,
                barWidth: .5,
                fill:1
            }

        },
        grid: {
            borderWidth: 0,
            hoverable: !0
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
        shadowSize: 0
    });
    //user growth chart end

});
