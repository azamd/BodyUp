"use strict";
//icheck js
$(document).ready(function() {

    $('input[type="checkbox"], input[type="radio"]').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    $('[type="reset"]').click(function() {
        setTimeout(function() {
            $("input").iCheck("update");
        }, 10);
    });
    $('#add_users_form').bootstrapValidator({

        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'User name is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The valid email address is required'
                    }
                }
            },
            phone_number: {
                validators: {
                    notEmpty: {
                        message: 'Phone number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/,
                        message: 'Enter valid phone number'
                    }
                }
            },

            gender: {
                validators: {
                    notEmpty: {
                        message: 'gender is required'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Address is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Pin code number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
                        message: 'Enter valid Pin code number'
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
    });
    $('.radio_val').on('ifChanged', function(event) {
        $('#add_users_form').bootstrapValidator('revalidateField', $('.radio_val'));
    });
    //Select 2 country js
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            '<span><img src="img/countries_flags/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    }
    $("#select23").select2({
        templateResult: formatState,
        templateSelection: formatState,
        placeholder: "select",
        theme: "bootstrap"
    });
    $('input[type=reset]').on('click', function() {
        $(".select2-selection__rendered").empty();
        $('#add_users_form').bootstrapValidator("resetForm");
    });
});
