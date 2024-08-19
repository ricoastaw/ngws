
;(function($){
    $(document).ready(function(){        
        
        // Add class to main logo if not already added
        if (!$('.logo_container a').hasClass('main-logo')) {
            $('.logo_container a').addClass('main-logo');
        }
        
        // Add second logo if not already present
        if ($('.logo_container .second-logo').length === 0) {
            $('.logo_container').append('<a class="second-logo" href="'+ dslLogoAttr.homeUrl +' "><img src="'+ dslLogoAttr.dlsLogo +' " alt=" '+ dslLogoAttr.imgAlt +'" id="logo" data-height-percentage="'+ dslLogoAttr.logoHeight +'" /></a>');
            $('.second-logo').hide(); // Hide second logo by default
        }

        // Function to toggle logos
        function toggleLogos() {
            if ($('#main-header').hasClass('et-fixed-header')) {
                $('.main-logo').hide(); // Hide main logo on scrolling
                $('.second-logo').show(); // Show second logo on scrolling               
            } else {
                $('.main-logo').show(); // Show main logo
                $('.second-logo').hide(); // Hide second logo on scrolling                
            }
        }

        // Initial toggle to set the correct logo visibility
        toggleLogos();

        // Apply toggle on scroll
        $(window).on('scroll', function () {
            toggleLogos();
        }); 
    });
})(jQuery);

