(function($){

	"use strict";
	  
	$(document).ready(function () {
		hotshot.init();
	});
	
	$(window).on('load', function() {
		hotshot.load();
	});
	
	var hotshot = {
	
		init: function () {
			// MENU OVERLAY
			$('.overlay').hide();
			$('.menu-icon').on('click', function(e) {
			   $('.overlay').show(500);
			   e.preventDefault();
			});
			$('.close').on('click', function(e) {
			   $('.overlay').hide(500);
			   e.preventDefault();
			});
			
			//EVENTS
			$('.events .toggle').click(function(e) {
				$(this).closest('.event').toggleClass('open');
				e.preventDefault();
			});
			
			//CART
			$('.message').hide();
			$('.addtocart').on('click', function(e) {
			   $('.message').show(500);
			   e.preventDefault();
			});
		 
			
			$('.summary').hide();
			$('.cartTrigger').on('click', function(e) {
			   $('.summary').show(500);
			   e.preventDefault();
			});
			
			$('.continue').on('click', function(e) {
			   $('.slideContent').hide(500);
			   e.preventDefault();
			});
			
			$('.profile').hide();
			$('.profileTrigger').on('click', function(e) {
			   $('.profile').toggle(500);
			   e.preventDefault();
			});
			
			//CHECKOUT
			$('.info .coupon').hide();
			$('.showcoupon').on('click', function(e) {
			   $('.info .coupon').toggle(500);
			   e.preventDefault();
			});
			
			// CUSTOM FORM ELEMENTS
			$('input[type=radio], input[type=checkbox],input[type=number],select').uniform();		

			// TABS
			$('.tab-content').hide().first().show();
			$('.tabs li:first').addClass('current');

			$('.tabs a').on('click', function (e) {
				e.preventDefault();
				$(this).closest('li').addClass('current').siblings().removeClass('current');
				$($(this).attr('href')).show().siblings('.tab-content').hide();
			});

			var hash = $.trim( window.location.hash );
			if (hash) $('.tabs a[href$="'+hash+'"]').trigger('click');
			
			// CONTACT FORM
			$('#contactform').submit(function(){
				var action = $(this).attr('action');
				$('#message').show(500,function() {
				$('#message').hide();
				$('#submit')
					.after('<img src="../images/contact-ajax-loader.gif" class="loader" />')
					.attr('disabled','disabled');
				
				$.post(action, { 
					name: $('#name').val(),
					email: $('#email').val(),
					phone: $('#phone').val(),
					comments: $('#comments').val()
				},
				function(data){
					document.getElementById('message').innerHTML = data;
					$('#message').slideDown('slow');
					$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#submit').removeAttr('disabled'); 
				});
				});
				return false; 
			});
		},
		
		load: function () {
			// UNIFY HEIGHT
			var maxHeight = 0;
				
			$('.heightfix').each(function(){
				if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
			});
			$('.heightfix').height(maxHeight);	

			// PRELOADER
			$('.loadwrap').fadeOut();
		}
	}

})(jQuery);