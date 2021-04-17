"use strict";
$(document).ready(function() {
    $("input[type='checkbox']").iCheck({
        checkboxClass: 'icheckbox_minimal-yellow',
        radioClass: 'iradio_minimal-yellow'

    });
    $("#log_in").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            }
        }
    });
    $("#forgot_password").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email_for: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            }
        }
    })
});