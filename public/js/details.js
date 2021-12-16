function showPage() {

	$('.aboutfolio').waypoint(function() {
			 $('.about-container ').addClass('fadeInUp');
	 }, { offset: '100%' });

	 $('#fh5co-work').waypoint(function() {
	 		 $('.project-container').addClass('fadeInRight');
	  }, { offset: '50%' });

		$('#fh5co-counters').waypoint(function() {
 	 		 $('.counter-container').addClass('fadeInUp');

				//counter init
				$('.js-counter').countTo();

 	  }, { offset: '100%' });

		$('#timeline').waypoint(function() {
	 		 $('.timeline').addClass('fadeInUp');
			 $('.timeline-badge').addClass('fadeInDownBig');
		   $('.panel1').addClass('fadeInLeft');
	 	   $('.panel2').addClass('fadeInRight');
	 	   $('.panel3').addClass('fadeInLeft');
	 	},{ offset: '100%' });

		$('#testimonials').waypoint(function() {
	 		 $('.testimonial-container').addClass('fadeInLeft');
	 	},{ offset: '100%' });
}
