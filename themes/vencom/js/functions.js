(function($){

	"use strict";

	$(function(){


		console.log('hello from functions.js');


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}


		/*** BANNERS & CUSTOM FUNCTIONS ***/

		$('.banner div.wrapper').transe({
		    0: {
		        top: '0%'
		    },
		    500: {
		        top: '50%'
		    }
		});

		$('.banner img').transe({
		    0: {
		        transform: 'scale(1)'
		    },
		    750: {
		        transform: 'scale(2)'
		    }
		});

		$('.topimg').transe({
		    0: {
		        opacity: '1'
		    },
		    300: {
		        opacity: '0'
		    }
		});

	});

})(jQuery);
