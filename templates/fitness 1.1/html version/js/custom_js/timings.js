"use strict";
$(document).ready(function() {
    //summernote JS
    $('.summernote').summernote({
        height: 200,
        width: 500
    });

    // class calendar
    $(".inline1, .inline2, .inline3, .inline4, .inline5, .inline6, .inline7, .inline8, .inline9, .inline10, .inline11, .inline12, .inline13, .inline14, .inline15, .inline16 ").on('click', function(e) {
        e.preventDefault();
        swal({
            title: "Class Calendar",
            text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis m",
            allowOutsideClick: false,
            confirmButtonColor: "#fc7070",
            confirmButtonText: "Cancel"

        })
    });
    //package reset functionality
    $('input[type=reset]').on('click', function() {
        $(".note-editable").empty();
        $('#timings_form').bootstrapValidator("resetForm");
    });

    $('#datetimepicker4').datetimepicker({

        keepOpen: false,
        useCurrent: false,
        minDate: new Date().setHours(0, 0, 0, 0)
    });
    $('#datetimepicker5').datetimepicker({

        keepOpen: false,
        useCurrent: false,
        minDate: new Date()
    });

    $('#datetimepicker4').on("dp.change", function(e) {
        $('#datetimepicker5').data("DateTimePicker").minDate(e.date);
        $('#timings_form').bootstrapValidator('revalidateField', 'time_from');
    });

    $('#datetimepicker5').on("dp.change", function(e) {
        $('#datetimepicker4').data("DateTimePicker").maxDate(e.date);
        $('#timings_form').bootstrapValidator('revalidateField', 'time_to');

    });
    $('#timings_form').bootstrapValidator({

        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required'
                    }
                }
            },
            category: {
                validators: {
                    notEmpty: {
                        message: 'The category is required'
                    }

                }
            },
            day: {
                validators: {
                    notEmpty: {
                        message: 'The day is required'
                    }
                }
            },
            time_from: {
                validators: {

                    notEmpty: {
                        message: 'The start time is required'
                    }

                }

            },
            time_to: {
                validators: {
                    notEmpty: {
                        message: 'The end time is required'
                    }
                }
            }

        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        swal({
            title: "Success.",
            text: "Successfully Submitted",
            type: "success",
            allowOutsideClick: false

        }).then(function() {

            location.reload();

        });
    })



});
