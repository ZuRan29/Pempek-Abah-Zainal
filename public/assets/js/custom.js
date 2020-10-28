/*
Copyright (c) 2016
------------------------------------------------------------------
[Master Javascript]
-------------------------------------------------------------------*/

(function ($) {
	"use strict";
	var Truelander = {
		initialised: false,
		version: 1.0,
		mobile: false,
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			/*-------------- Truelander Functions Calling ---------------------------------------------------
			------------------------------------------------------------------------------------------------*/
			this.RTL();
			this.Menu_bar();
			this.date();
			this.Time();

		},

		/*-------------- Truelander Functions definition ---------------------------------------------------
		---------------------------------------------------------------------------------------------------*/
		RTL: function () {
			// On Right-to-left(RTL) add class
			var rtl_attr = $("html").attr('dir');
			if(rtl_attr){
				$('html').find('body').addClass("rtl");
			}
		},

		date: function() {
			$('#datetimepicker1').datetimepicker({
				format: 'DD/MM/YYYY'
			});
		  },
		Time: function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            },
		//menu
			Menu_bar: function(){
				var counter = 0;
				$('.cr_menu_btn').click(function(){
					//alert('uuu');
					if( counter == '0') {
						$('.tl_header_right').addClass('cr_main_menu_hide');
						$(this).children().removeAttr('class');
						$(this).children().attr('class','fa fa-close');
						counter++;
					}
					else {
						$('.tl_header_right').removeClass('cr_main_menu_hide');
						$(this).children().removeAttr('class');
						$(this).children().attr('class','fa fa-bars');
						counter--;
					}
				});
			}


	};



	// Load Event
	$(window).on('load', function() {
		/* Trigger side menu scrollbar */
		var body_h = window.innerHeight;
		$('body').css('height',body_h);
	});

	// Scroll Event
	$(window).on('resize', function () {
		var body_h = window.innerHeight;
		$('body').css('height',body_h);
	});

	// Scroll Event
	$(window).on('scroll', function () {

	});

	// ready function
	$(document).ready(function() {
		Truelander.init();
	});


})(jQuery);
