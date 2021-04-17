"use-strict"
$(document).ready(function(){
new Card({
    form: document.querySelector('form'),
    container: '.card-wrapper'
});
$(".nameuser").on("keyup", function(){var user_name=$(".nameuser").val();$(".jp-card-name").text(user_name);});
});