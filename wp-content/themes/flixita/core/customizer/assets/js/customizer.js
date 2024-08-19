/**
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function($) {
    // Site title and description.
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.site-title').text(to);
        });
    });
    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.site-description').text(to);
        });
    });

    // Header text color.
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title, .site-description').css({
                    'color': to
                });
            }
        });
    });

    $(document).ready(function($) {
        $('input[data-input-type]').on('input change', function() {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })


    // logo_size
	wp.customize('logo_size', function(value) {
        value.bind(function(logo_size) {
            jQuery('.logo img, .mobile-logo img').css('max-width', logo_size + 'px');
        });
    });

    //hdr_info1_title
    wp.customize(
        'hdr_info1_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.above-header .info1 h6').text(newval);
                }
            );
        }
    );

    //hdr_info2_title
    wp.customize(
        'hdr_info2_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-header .info2 h6').text(newval);
                }
            );
        }
    );

    //hdr_info3_title
    wp.customize(
        'hdr_info3_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-header .info3 h6').text(newval);
                }
            );
        }
    );

    //hdr_btn_label
    wp.customize(
        'hdr_btn_label',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-navigation .button-area a').text(newval);
                }
            );
        }
    );

    //service_ttl
    wp.customize(
        'service_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.service-section  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //service_subttl
    wp.customize(
        'service_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.service-section  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //service_desc
    wp.customize(
        'service_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.service-section  .theme-main-heading p').text(newval);
                }
            );
        }
    );


    

    //call_action_ttl
    wp.customize(
        'call_action_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-cta  .call-content .title').text(newval);
                }
            );
        }
    );

    //call_action_subttl
    wp.customize(
        'call_action_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-cta  .call-content .description').text(newval);
                }
            );
        }
    );

    //call_action_ttl1
    wp.customize(
        'call_action_ttl1',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-cta  .call-details1 .call-title a').text(newval);
                }
            );
        }
    );

    //call_action_ttl2
    wp.customize(
        'call_action_ttl2',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-cta  .call-details2 .call-title a').text(newval);
                }
            );
        }
    );


   

    //blog_ttl
    wp.customize(
        'blog_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-blog  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //blog_subttl
    wp.customize(
        'blog_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-blog  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //blog_desc
    wp.customize(
        'blog_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-blog  .theme-main-heading p').text(newval);
                }
            );
        }
    );
	
	//product_ttl
    wp.customize(
        'product_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-product  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //product_subttl
    wp.customize(
        'product_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-product  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //product_desc
    wp.customize(
        'product_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.flixita-main-product  .theme-main-heading p').text(newval);
                }
            );
        }
    );
	

})(jQuery);