"use-strict"
$(document).ready(function () {
var AreaChart = require('livechart').AreaChart;
var parent = document.getElementById("areachart");
var chart = new AreaChart(parent);
//count of points
chart.set('count', 10);
chart.set('format', function(v){return v.toFixed(1)});
setInterval(function(){
  var v1 = Math.random() * 100;
  var v2 = Math.random() * 100;
  chart.add([v1, v2]);
});
});