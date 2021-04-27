"use strict";
$(document).ready(function(){


 $('.active').card({
            container: $('.wrap')
        });
        $(function() {
            // Get the form.
            var form = $('#orderitem');
            // Get the messages div.
            var formMessages = $('#form-messages');

            $(form).submit(function(event) {
                // Stop the browser from submitting the form.
                event.preventDefault();

                // Submit the form using AJAX.
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    data: $("#orderitem").serialize(),
                    success: function(response) {
                        $(formMessages).removeClass('alert-danger');
                        $(formMessages).addClass('alert-success');

                        // Set the message text.
                        $(formMessages).text(response);

                        // Clear the form.
                        $("form")[0].reset();
                    }
                });
            });
        });
});