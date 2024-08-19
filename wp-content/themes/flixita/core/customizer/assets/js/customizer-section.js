function flixitashomesettingsscroll(section_id) {
    var scroll_section_id = "slider-section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch (section_id) {
        case 'accordion-section-info_section_set':
            scroll_section_id = "info-section";
            break;

        case 'accordion-section-service_section_set':
            scroll_section_id = "service-section";
            break;

        case 'accordion-section-call_action_section_set':
            scroll_section_id = "flixita-call-action-section";
            break;
		
		case 'accordion-section-product_section_set':
			scroll_section_id = "flixita-product-section";
			break;
			
        case 'accordion-section-blog_section_set':
            scroll_section_id = "flixita-blog-section";
            break;
    }

    if ($contents.find('#' + scroll_section_id).length > 0) {
        $contents.find("html, body").animate({
            scrollTop: $contents.find("#" + scroll_section_id).offset().top
        }, 1000);
    }
}

jQuery('body').on('click', '#sub-accordion-panel-flixita_frontpage_sections .control-subsection .accordion-section-title', function(event) {
    var section_id = jQuery(this).parent('.control-subsection').attr('id');
    flixitashomesettingsscroll(section_id);
});