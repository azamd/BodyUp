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

// Jquery validate form contact
jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message-contact").slideUp(750,function() {
		$('#message-contact').hide();

 		$('#submit-contact')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			name_contact: $('#name_contact').val(),
			lastname_contact: $('#lastname_contact').val(),
			email_contact: $('#email_contact').val(),
			phone_contact: $('#phone_contact').val(),
			message_contact: $('#message_contact').val(),
			verify_contact: $('#verify_contact').val()
		},
			function(data){
				document.getElementById('message-contact').innerHTML = data;
				$('#message-contact').slideDown('slow');
				$('#contactform .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-contact').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

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
