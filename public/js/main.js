var Main = {
	Init: function () {
		Main.registerEventListeners();
	},

	registerEventListeners: function() {
		Main.windowScroll();
		Main.windowLoad();
	},

	windowLoad: function() {
		$('#left-container').addClass('animated slideInLeft');
		$('#right-container').addClass('animated slideInRight');
	},

	windowScroll: function() {

		(function() {
			var prevScroll = 0;

			$(document).on('scroll' , window , function() {
				var currentScroll = $(this).scrollTop();
				
				if ( currentScroll > prevScroll ) {
					if ( $('.navbar-default').hasClass('navbar-fixed-top') ) {
						$('.navbar-default').removeClass('navbar-fixed-top animated fadeIn');
						$('.wrapper').css({ marginTop: 0 });
					}
				} else {
					if ( !$('.navbar-default').hasClass('navbar-fixed-top') ) {
						$('.navbar-default').addClass('navbar-fixed-top animated fadeIn');
						$('.wrapper').css({ marginTop: 120 });
					}
				}

				prevScroll = currentScroll;
			});
		})();

	},

	submitForm: function(form , callback) {
		$.ajax({
			url: $(form).attr('action'),
			type: 'POST',
			data: $(form).serialize(),
			cache: false,
			success: function(response) {
				console.log(response);

				if ($(form).find('#title')) {
					$(form).find('#title').val('');
				}

				if ($(form).find('#body')) {
					$(form).find('#body').val('');
				}

				if (callback) {
					callback();
				}
			},
			error: function(error) {
				console.log(error);
			}
		});	
	} 
};

window.addEventListener('load' , Main.Init);