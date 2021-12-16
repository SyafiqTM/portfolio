$(document).ready(function() {
    $('.mg-modal').magnificPopup({
        items: {
            src: '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">\
                <div class="modal-dialog">\
                <div class="modal-content">\
                    <div class="modal-header">\
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>\
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\
                    </div>\
                    <div class="modal-body">\
                    </div>\
                    <div class="modal-footer">\
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>\
                    <button type="button" class="btn btn-primary">Understood</button>\
                    </div>\
                </div>\
                </div>\
            </div>',
            type:'inline'
        },
        modal: true
    });
  // MagnificPopup
	var magnifPopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
			removalDelay: 100,
			mainClass: 'mfp-with-zoom',
			gallery:{
				enabled:true
			},
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			},
			image: {
				titleSrc: function(item) {
				    return item.el.attr('data-title') + ' &middot; <a href="'+item.el.attr('data-source')+'" class="image-source-link" target="_blank">'+item.el.attr('data-source')+'</a>';
				  }
			 },
			 verticalFit: true, // Fits image in area vertically
			 tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
		});
	};

	var magnifVideo = function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
	};




	// Call the functions
	magnifPopup();
	magnifVideo();

});
