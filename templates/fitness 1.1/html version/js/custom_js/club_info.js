"use strict";
//summernote JS
$(document).ready(function(){
$('.summernote').summernote({
    height: 200
});
var f = 'bootstrap3';
var c = 'popup';

$(function() {
    $('#f').val(f);
    $('#c').val(c);
});

$(function() {

    //defaults
    $.fn.editable.defaults.url = '/post';

    //editables
    $('#username').editable({
        url: '/post',
        type: 'text',
        pk: 1,
        name: 'username',
        title: 'Enter username',
        validate: function(value) {
            if ($.trim(value) == '') return 'This field is required';
        }
    });
    $('#email').editable({
        validate: function(value) {
            if ($.trim(value) == '') return 'This field is required';
        }
    });
    $('#contact').editable({
        validate: function(value) {
            var r = /^[2-9]\d{2}-\d{3}-\d{4}$/;
            if ($.trim(value) == '') {
                return 'This field is required'
            } else if (!r.test($.trim(value))) {
                return 'please enter valid contact no.'
            }
        }
    });
    $('#addr').editable({
        validate: function(value) {
            if ($.trim(value) == '') return 'This field is required';
        }
    });
    $('#city').editable({
        validate: function(value) {
            if ($.trim(value) == '') return 'This field is required';
        }
    });
    $('#pincode').editable({
        validate: function(value) {
            var p = /[0-9]{5}/;
            if ($.trim(value) == '') {
                return 'This field is required'
            } else if (!p.test($.trim(value))) {
                return 'please enter valid pincode no.'
            }
        }
    });
    $('#fax').editable({
        validate: function(value) {
            var f = /^\+?[0-9]+$/;
            if ($.trim(value) == '') {
                return 'This field is required'
            } else if (!f.test($.trim(value))) {
                return 'please enter valid fax no.'
            }
        }
    });

    $('#url').editable({
        validate: function(value) {
            var u = /(http:\/\/www\.|https:\/\/www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
            if ($.trim(value) == '') {
                return 'This field is required'
            } else if (!u.test($.trim(value))) {
                return 'please enter valid URL.'
            }
        }
    });
    $('#users .editable').on('hidden', function(e, reason) {
        if (reason === 'save' || reason === 'nochange') {
            var $next = $(this).closest('tr').next().find('.editable');
            if ($('#autoopen').is(':checked')) {
                setTimeout(function() {
                    $next.editable('show');
                }, 300);
            } else {
                $next.focus();
            }
        }
    })

});
$(".reset-editable").on('click',function() {
    $(".note-editable").empty();
});
});