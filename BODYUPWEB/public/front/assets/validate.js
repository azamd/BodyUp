/* <![CDATA[ */
/// Jquery validate newsletter
jQuery(document).ready(function(){

	$('#newsletter').submit(function(){

		var action = $(this).attr('action');

		$("#message-newsletter").slideUp(750,function() {
		$('#message-newsletter').hide();
		
		$('#submit-newsletter')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');

		$.post(action, {
			email_newsletter: $('#email_newsletter').val()
		},
			function(data){
				document.getElementById('message-newsletter').innerHTML = data;
				$('#message-newsletter').slideDown('slow');
				$('#newsletter .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-newsletter').removeAttr('disabled');
				if(data.match('success') != null) $('#newsletter').slideUp('slow');

			}
		);

		});

		return false;

	});

});


		
// Jquery validate form subscribe plan
jQuery(document).ready(function(){

	$('#subscribe-plan').submit(function(){

		var action = $(this).attr('action');

		$("#message-subscribe").slideUp(750,function() {
		$('#message-subscribe').hide();

 		$('#submit-plan')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			firstname: $('#firstname').val(),
			lastname: $('#lastname').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			plan: $('#plan').val(),
			payment_mode: $('#payment_mode').val(),
			verify_plan: $('#verify_plan').val()
		},
			function(data){
				document.getElementById('message-subscribe').innerHTML = data;
				$('#message-subscribe').slideDown('slow');
				$('#subscribe-plan .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-plan').removeAttr('disabled');
			}
		);

		});

		return false;

	});
});
  /* ]]> */
