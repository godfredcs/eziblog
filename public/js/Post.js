var Post = {
	Init: function() {
		Post.registerEventListeners();
	},

	registerEventListeners: function() {
		Post.submitPost();
		setInterval(Post.refreshPosts , 10000);

		$(document).on('click' , '#blogger-list' , function() {
			if ($(this).hasClass('glyphicon-chevron-down')) {
				$(this).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
				$('#b-list').slideUp();
			} else {
				$(this).removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
				$('#b-list').slideDown();
			}
		});

		$(document).on('click' , '#latest-list' , function() {
			if ($(this).hasClass('glyphicon-chevron-down')) {
				$(this).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
				$('#l-list').slideUp();
			} else {
				$(this).removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
				$('#l-list').slideDown();
			}
		});
	},

	submitPost: function() {
		$(document).on('submit' , '#post-form' , function(e) {
			e.preventDefault();

			Main.submitForm('#post-form' , Post.refreshPosts);
		});
	},

	refreshPosts: function() {
		$.ajax({
			url: '/posts',
			type: 'GET',
			success: function(response) {
				$('#post-container').html(response);
			}
		});
	}
};

window.addEventListener('load' , Post.Init);
