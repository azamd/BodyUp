"use strict";
$(document).ready(function() {
       
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-blue, input[type="radio"].minimal-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });

        $('#dpYears').datepicker();

    $(function() {
        var opts = $("#source").html(),
            opts2 = "<option></option>" + opts;
        $("select.populate").each(function() {
            var e = $(this);
            e.html(e.hasClass("placeholder") ? opts2 : opts);
        });
        $(".examples article:odd").addClass("zebra");
    });
   
    function format(state) {
        if (!state.id) return state.text; // optgroup
        return "<img class='flag' src='img/countries_flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
    }
    $("#select2_sample4").select2({
        placeholder: "Select a Country",
        allowClear: true,
        formatResult: format,
        formatSelection: format,
        escapeMarkup: function(m) {
            return m;
        }
    });
});