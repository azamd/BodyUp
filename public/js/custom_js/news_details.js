"use strict";
$(document).ready(function(){


$('#news_details')
    .bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            user_name: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            },
            website: {
                validators: {
                    notEmpty: {
                        message: 'The website is required and cannot be empty'
                    }

                }
            },
            comment: {
                validators: {
                    notEmpty: {
                        message: 'The comment is required and cannot be empty'
                    }

                }
            }

        }
    })
});