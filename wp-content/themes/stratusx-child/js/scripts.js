(function($) {
	
	$(window).load(function() {
		$('.yl-focus').unwrap();
	});
	
	function getId(url) {
	    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
	    var match = url.match(regExp);
	
	    if (match && match[2].length == 11) {
	        return match[2];
	    } else {
	        return 'error';
	    }
	}

	var myId;
	
	$(document).ajaxSuccess(function() {
		$('.yl-focus').each(function() {
			var myUrl = $(this).attr('href');
			myId = getId(myUrl);
	
			$(this).after('<div class="video-container"><iframe width="560" height="315" src="//www.youtube.com/embed/' + myId + '" frameborder="0" allowfullscreen></iframe></div>');
		});
	});
	
})(jQuery);