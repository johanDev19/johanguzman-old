$('.owl-carousel').owlCarousel({
    items:3,
    lazyLoad:true,
    loop:false,
    margin:20,
    responsiveClass: true,
    responsive: {
    	0: {
    		items: 1,
    		nav: true
    	},
    	600: {
    		items: 3,
    		nav: true
    	},
    	1000: {
    		items: 3,
    		nav: true
    	}
    }
});