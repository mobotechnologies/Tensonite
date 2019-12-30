   $('[data-fancybox="images"]').fancybox({
			baseClass: "fancybox-custom-layout",
			infobar: false,
			touch: {
			  vertical: false
			},
			buttons: ["close", "thumbs", "share"],
			animationEffect: "fade",
			transitionEffect: "fade",
			preventCaptionOverlap: false,
			idleTime: false,
			gutter: 0,
			// Customize caption area
			caption: function(instance) {
			  return '<h3>home</h3><p>interiors, exteriors, and the humans that inhabit them.</p><p><a href="https://unsplash.com/collections/curated/162" target="_blank">unsplash.com</a></p>';
			}
		  });