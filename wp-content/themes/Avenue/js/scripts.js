jQuery(document).ready(function($) {
	// Tabs

	//When page loads...
	$('.tabs-wrapper').each(function() {
		$(this).find(".tab_content").hide(); //Hide all content
		$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(this).find(".tab_content:first").show(); //Show first tab content
	});
	
	//On Click Event
	$("ul.tabs li").click(function(e) {
		$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(this).parents('.tabs-wrapper').find(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
		
		e.preventDefault();
	});
	
	$("ul.tabs li a").click(function(e) {
		e.preventDefault();
	})
	
	// Implementation of jCarouselLite
	$('.anyClass').each(function() {
		var id = $(this).attr('id');
		var number = id.replace('anyClass_', '');
		$('#'+id).jCarouselLite({
	        btnNext: "#next_"+number,
	        btnPrev: "#prev_"+number
	    });
	});
	
	$(".toggle-content").hide(); 

	$("h5.toggle").toggle(function(){
		$(this).addClass("active");
		}, function () {
		$(this).removeClass("active");
	});

	$("h5.toggle").click(function(){
		$(this).next(".toggle-content").slideToggle();
	});
	
	// Add colorbox to gallery
	$('.gallery').each(function(index, obj){
		var galleryid = Math.floor(Math.random()*10000);
		$(obj).find('a').colorbox({rel:galleryid, maxWidth:'95%', maxHeight:'95%'});
	});
	$("a.lightbox").colorbox({maxWidth:'95%', maxHeight:'95%'});
	
	// Contact form
	$('#contactForm').live('submit', function(e) {
		var form = $(this);
		var name = $(this).find('[name=pyre_name]').val();
		var email = $(this).find('[name=pyre_email]').val();
		var message = $(this).find('[name=pyre_message]').val();
		
		if(name == '') {
			$(this).find('[name=pyre_name]').addClass('error');
			$(this).find('[name=pyre_name]').parent().find('.error_msg').fadeIn();
			
			return false;
		} else {
			$(this).find('[name=pyre_name]').removeClass('error');
			$(this).find('[name=pyre_name]').parent().find('.error_msg').fadeOut();
		}
		
		var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		if(email == ''  || !email_regex.test(email)) {
			$(this).find('[name=pyre_email]').addClass('error');
			$(this).find('[name=pyre_email]').parent().find('.error_msg').fadeIn();
			
			return false;
		} else {
			$(this).find('[name=pyre_email]').removeClass('error');
			$(this).find('[name=pyre_email]').parent().find('.error_msg').fadeOut();
		}
		
		if(message == '') {
			$(this).find('[name=pyre_message]').addClass('error');
			$(this).find('[name=pyre_message]').parent().find('.error_msg').fadeIn();
			
			return false;
		} else {
			$(this).find('[name=pyre_message]').removeClass('error');
			$(this).find('[name=pyre_message]').parent().find('.error_msg').fadeOut();
		}
		
		$.ajax({
			url: AvenueVars.ajaxUrl,
			data: jQuery(form).serialize()+'&action=pyre_contact_form',
			type: 'POST',
			success: function() {
				$('.email_sent').fadeIn(400).delay(5000).fadeOut(400);
			}
		});
		
		e.preventDefault();
	});
});