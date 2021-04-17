 $(window).load(function() {
                new $.popup({                
                    title       : '',
                    content         : '<a href="explore-1.html"><img src="img/popup_img.jpg" alt="Image" class="pop_img"><h3 id="pop_msg">This week special offer <strong>30% OFF</strong> on all Workout Videos!</h3></a><small>Autoclose delay in 5 seconds.</small>', 
					html: true,
					autoclose   : true,
					closeOverlay:true,
					closeEsc: true,
					buttons     : false,
                    timeout     : 5000 
                });
            });