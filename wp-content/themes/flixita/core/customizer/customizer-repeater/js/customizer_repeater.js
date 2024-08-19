/* global jQuery */
/* global wp */
function flixita_media_upload(button_class) {
    'use strict';
    jQuery('body').on('click', button_class, function () {
        var button_id = '#' + jQuery(this).attr('id');
        var display_field = jQuery(this).parent().children('input:text');
        var _custom_media = true;

        wp.media.editor.send.attachment = function (props, attachment) {

            if (_custom_media) {
                if (typeof display_field !== 'undefined') {
                    switch (props.size) {
                        case 'full':
                            display_field.val(attachment.sizes.full.url);
                            display_field.trigger('change');
                            break;
                        case 'medium':
                            display_field.val(attachment.sizes.medium.url);
                            display_field.trigger('change');
                            break;
                        case 'thumbnail':
                            display_field.val(attachment.sizes.thumbnail.url);
                            display_field.trigger('change');
                            break;
                        default:
                            display_field.val(attachment.url);
                            display_field.trigger('change');
                    }
                }
                _custom_media = false;
            } else {
                return wp.media.editor.send.attachment(button_id, [props, attachment]);
            }
        };
        wp.media.editor.open(button_class);
        window.send_to_editor = function (html) {

        };
        return false;
    });
}

/********************************************
 *** Generate unique id ***
 *********************************************/
function flixita_customizer_repeater_uniqid(prefix, more_entropy) {
    'use strict';
    if (typeof prefix === 'undefined') {
        prefix = '';
    }

    var retId;
    var php_js;
    var formatSeed = function (seed, reqWidth) {
        seed = parseInt(seed, 10)
            .toString(16); // to hex str
        if (reqWidth < seed.length) { // so long we split
            return seed.slice(seed.length - reqWidth);
        }
        if (reqWidth > seed.length) { // so short we pad
            return new Array(1 + (reqWidth - seed.length))
                .join('0') + seed;
        }
        return seed;
    };

    // BEGIN REDUNDANT
    if (!php_js) {
        php_js = {};
    }
    // END REDUNDANT
    if (!php_js.uniqidSeed) { // init seed with big random int
        php_js.uniqidSeed = Math.floor(Math.random() * 0x75bcd15);
    }
    php_js.uniqidSeed++;

    retId = prefix; // start with prefix, add current milliseconds hex string
    retId += formatSeed(parseInt(new Date()
        .getTime() / 1000, 10), 8);
    retId += formatSeed(php_js.uniqidSeed, 5); // add seed hex string
    if (more_entropy) {
        // for more entropy we add a float lower to 10
        retId += (Math.random() * 10)
            .toFixed(8)
            .toString();
    }

    return retId;
}


/********************************************
 *** General Repeater ***
 *********************************************/
function flixita_customizer_repeater_refresh_social_icons(th) {
    'use strict';
    var icons_repeater_values = [];
    th.find('.customizer-repeater-social-repeater-container').each(function () {
        var icon = jQuery(this).find('.icp').val();
        var link = jQuery(this).find('.customizer-repeater-social-repeater-link').val();
        var id = jQuery(this).find('.customizer-repeater-social-repeater-id').val();

        if (!id) {
            id = 'customizer-repeater-social-repeater-' + flixita_customizer_repeater_uniqid();
            jQuery(this).find('.customizer-repeater-social-repeater-id').val(id);
        }

        if (icon !== '' && link !== '') {
            icons_repeater_values.push({
                'icon': icon,
                'link': link,
                'id': id
            });
        }
    });

    th.find('.social-repeater-socials-repeater-colector').val(JSON.stringify(icons_repeater_values));
    flixita_customizer_repeater_refresh_general_control_values();
}


function flixita_customizer_repeater_refresh_general_control_values() {
    'use strict';
    jQuery('.customizer-repeater-general-control-repeater').each(function () {
        var values = [];
        var th = jQuery(this);
        th.find('.customizer-repeater-general-control-repeater-container').each(function () {

            var icon_value = jQuery(this).find('.icp').val();
            var text = jQuery(this).find('.customizer-repeater-text-control').val();
            var link = jQuery(this).find('.customizer-repeater-link-control').val();
            var text2 = jQuery(this).find('.customizer-repeater-text2-control').val();
            var image_url = jQuery(this).find('.custom-media-url').val();
            var choice = jQuery(this).find('.customizer-repeater-image-choice').val();
            var title = jQuery(this).find('.customizer-repeater-title-control').val();
            var subtitle = jQuery(this).find('.customizer-repeater-subtitle-control').val();
			var subtitle2 = jQuery(this).find('.customizer-repeater-subtitle2-control').val();
			var align = jQuery(this).find('.customizer-repeater-align').val();
            var id = jQuery(this).find('.social-repeater-box-id').val();
            if (!id) {
                id = 'social-repeater-' + flixita_customizer_repeater_uniqid();
                jQuery(this).find('.social-repeater-box-id').val(id);
            }
            var social_repeater = jQuery(this).find('.social-repeater-socials-repeater-colector').val();

            if (text !== '' || image_url !== '' || title !== '' || subtitle !== '' || subtitle2 !== ''  || icon_value !== '' || link !== '' || choice !== '' || social_repeater !== '' || align !== '') {
                values.push({
                    'icon_value': (choice === 'customizer_repeater_none' ? '' : icon_value),
                    'text': flixitaescapeHtml(text),
                    'link': link,
                    'text2': flixitaescapeHtml(text2),
                    'image_url': (choice === 'customizer_repeater_none' ? '' : image_url),
                    'choice': choice,
                    'title': flixitaescapeHtml(title),
                    'subtitle': flixitaescapeHtml(subtitle),
					'subtitle2': flixitaescapeHtml(subtitle2),
					'align': flixitaescapeHtml(align),
                    'social_repeater': flixitaescapeHtml(social_repeater),
                    'id': id,
                });
            }

        });
        th.find('.customizer-repeater-colector').val(JSON.stringify(values));
        th.find('.customizer-repeater-colector').trigger('change');
    });
}


jQuery(document).ready(function () {
    'use strict';
    var flixita_theme_controls = jQuery('#customize-theme-controls');
    flixita_theme_controls.on('click', '.customizer-repeater-customize-control-title', function () {
        jQuery(this).next().slideToggle('medium', function () {
            if (jQuery(this).is(':visible')){
                jQuery(this).prev().addClass('repeater-expanded');
                jQuery(this).css('display', 'block');
            } else {
                jQuery(this).prev().removeClass('repeater-expanded');
            }
        });
    });

    flixita_theme_controls.on('change', '.icp',function(){
        flixita_customizer_repeater_refresh_general_control_values();
        return false;
    });
	
	flixita_theme_controls.on('change','.customizer-repeater-align', function(){
		flixita_customizer_repeater_refresh_general_control_values();
        return false;
		
	});
	
    flixita_theme_controls.on('change', '.customizer-repeater-image-choice', function () {
        if (jQuery(this).val() === 'customizer_repeater_image') {
            jQuery(this).parent().parent().find('.social-repeater-general-control-icon').hide();
            jQuery(this).parent().parent().find('.customizer-repeater-image-control').show();

        }
        if (jQuery(this).val() === 'customizer_repeater_icon') {
            jQuery(this).parent().parent().find('.social-repeater-general-control-icon').show();
            jQuery(this).parent().parent().find('.customizer-repeater-image-control').hide();
        }
        if (jQuery(this).val() === 'customizer_repeater_none') {
            jQuery(this).parent().parent().find('.social-repeater-general-control-icon').hide();
            jQuery(this).parent().parent().find('.customizer-repeater-image-control').hide();
        }

        flixita_customizer_repeater_refresh_general_control_values();
        return false;
    });
    flixita_media_upload('.customizer-repeater-custom-media-button');
    jQuery('.custom-media-url').on('change', function () {
        flixita_customizer_repeater_refresh_general_control_values();
        return false;
    });

    var color_options = {
        change: function(event, ui){
            flixita_customizer_repeater_refresh_general_control_values();
        }
    };

    /**
     * This adds a new box to repeater
     *
     */
    flixita_theme_controls.on('click', '.customizer-repeater-new-field', function () {
        // Usable For Free Theme Only
		var parentid = jQuery(this).parent().attr("id"); 
		
		if(parentid == 'customize-control-slider')
		{
			var numItems = jQuery("#customize-control-slider .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 3){
			  jQuery( "#customize-control-flixita_slider_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-slider_right')
		{
			var numItems = jQuery("#customize-control-slider_right .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 2){
			  jQuery( "#customize-control-flixita_slider_right_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-hdr_social_icons')
		{
			var numItems = jQuery("#customize-control-hdr_social_icons .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 4){
			  jQuery( "#customize-control-flixita_social_icon_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-footer_top_info')
		{
			var numItems = jQuery("#customize-control-footer_top_info .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 4){
			  jQuery( "#customize-control-flixita_footer_top_info_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-info_data')
		{
			var numItems = jQuery("#customize-control-info_data .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 4){
			  jQuery( "#customize-control-flixita_info_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-info_data2')
		{
			var numItems = jQuery("#customize-control-info_data2 .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 3){
			  jQuery( "#customize-control-flixita_info_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		if(parentid == 'customize-control-service_data')
		{
			var numItems = jQuery("#customize-control-service_data .customizer-repeater-general-control-repeater-container").length 
			if(numItems >= 4){
			  jQuery( "#customize-control-flixita_service_upgrade .flixita-upgrade-pro-message" ).show();
			  return false;
			}
		}
		
		
        var th = jQuery(this).parent();
        var id = 'customizer-repeater-' + flixita_customizer_repeater_uniqid();
		
        if (typeof th !== 'undefined') {
            /* Clone the first box*/
            var field = th.find('.customizer-repeater-general-control-repeater-container:first').clone( true, true );

            if (typeof field !== 'undefined') {
                /*Set the default value for choice between image and icon to icon*/
                field.find('.customizer-repeater-image-choice').val('customizer_repeater_icon');

                /*Show icon selector*/
                field.find('.social-repeater-general-control-icon').show();

                /*Hide image selector*/
                if (field.find('.social-repeater-general-control-icon').length > 0) {
                    field.find('.customizer-repeater-image-control').hide();
                }

                /*Show delete box button because it's not the first box*/
                field.find('.social-repeater-general-control-remove-field').show();

                /* Empty control for icon */
                field.find('.input-group-addon').find('.fa').attr('class', 'fa');


                /*Remove all repeater fields except first one*/

                field.find('.customizer-repeater-social-repeater').find('.customizer-repeater-social-repeater-container').not(':first').remove();
                field.find('.customizer-repeater-social-repeater-link').val('');
                field.find('.social-repeater-socials-repeater-colector').val('');

                /*Remove value from icon field*/
                field.find('.icp').val('');

                /*Remove value from text field*/
                field.find('.customizer-repeater-text-control').val('');

                /*Remove value from link field*/
                field.find('.customizer-repeater-link-control').val('');

                /*Remove value from text field*/
                field.find('.customizer-repeater-text2-control').val('');
				
				/*Set the default value in slide align*/
                field.find('.customizer-repeater-align').val('left');
				
                /*Set box id*/
                field.find('.social-repeater-box-id').val(id);

                /*Remove value from media field*/
                field.find('.custom-media-url').val('');

                /*Remove value from title field*/
                field.find('.customizer-repeater-title-control').val('');


                /*Remove value from subtitle field*/
                field.find('.customizer-repeater-subtitle-control').val('');
				
				/*Remove value from subtitle field*/
                field.find('.customizer-repeater-subtitle2-control').val('');
				

                /*Append new box*/
                th.find('.customizer-repeater-general-control-repeater-container:first').parent().append(field);

                /*Refresh values*/
                flixita_customizer_repeater_refresh_general_control_values();
            }

        }
        return false;
    });


    flixita_theme_controls.on('click', '.social-repeater-general-control-remove-field', function () {
        if (typeof    jQuery(this).parent() !== 'undefined') {
            jQuery(this).parent().hide(500, function(){
				// Usable For Free Theme Only
				var main_slider_items = jQuery("#customize-control-slider .customizer-repeater-general-control-repeater-container").length 
				if(main_slider_items <= 3){
				  jQuery( "#customize-control-flixita_slider_upgrade .flixita-upgrade-pro-message" ).hide();
				}	
				
				var main_slider_right_items = jQuery("#customize-control-slider_right .customizer-repeater-general-control-repeater-container").length 
				if(main_slider_right_items <= 2){
				  jQuery( "#customize-control-flixita_slider_right_upgrade .flixita-upgrade-pro-message" ).hide();
				}
				
				var main_social_items = jQuery("#customize-control-hdr_social_icons .customizer-repeater-general-control-repeater-container").length 
				if(main_social_items <= 4){
				  jQuery( "#customize-control-flixita_social_icon_upgrade .flixita-upgrade-pro-message" ).hide();
				}	
				
				var main_footer_top_items = jQuery("#customize-control-footer_top_info .customizer-repeater-general-control-repeater-container").length 
				if(main_footer_top_items <= 4){
				  jQuery( "#customize-control-flixita_footer_top_info_upgrade .flixita-upgrade-pro-message" ).hide();
				}	
				
				var main_info_items = jQuery("#customize-control-info_data .customizer-repeater-general-control-repeater-container").length 
				if(main_info_items <= 4){
				  jQuery( "#customize-control-flixita_info_upgrade .flixita-upgrade-pro-message" ).hide();
				}	
				
				var main_info_items2 = jQuery("#customize-control-info_data2 .customizer-repeater-general-control-repeater-container").length 
				if(main_info_items2 <= 3){
				  jQuery( "#customize-control-flixita_info_upgrade .flixita-upgrade-pro-message" ).hide();
				}	
				
				var main_service_items = jQuery("#customize-control-service_data .customizer-repeater-general-control-repeater-container").length 
				if(main_service_items <= 4){
				  jQuery( "#customize-control-flixita_service_upgrade .flixita-upgrade-pro-message" ).hide();
				}
				
                jQuery(this).parent().remove();
                flixita_customizer_repeater_refresh_general_control_values();
				
            });
        }
        return false;
    });


    flixita_theme_controls.on('keyup', '.customizer-repeater-title-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });

    flixita_theme_controls.on('keyup', '.customizer-repeater-subtitle-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });
	
	flixita_theme_controls.on('keyup', '.customizer-repeater-subtitle2-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });
	
	
    flixita_theme_controls.on('keyup', '.customizer-repeater-text-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });

    flixita_theme_controls.on('keyup', '.customizer-repeater-link-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });

    flixita_theme_controls.on('keyup', '.customizer-repeater-text2-control', function () {
        flixita_customizer_repeater_refresh_general_control_values();
    });
	
	
    /*Drag and drop to change icons order*/

    jQuery('.customizer-repeater-general-control-droppable').sortable({
        axis: 'y',
        update: function () {
            flixita_customizer_repeater_refresh_general_control_values();
        }
    });


    /*----------------- Socials Repeater ---------------------*/
    flixita_theme_controls.on('click', '.social-repeater-add-social-item', function (event) {
        event.preventDefault();
        var th = jQuery(this).parent();
        var id = 'customizer-repeater-social-repeater-' + flixita_customizer_repeater_uniqid();
        if (typeof th !== 'undefined') {
            var field = th.find('.customizer-repeater-social-repeater-container:first').clone( true, true );
            if (typeof field !== 'undefined') {
                field.find( '.icp' ).val('');
                field.find( '.input-group-addon' ).find('.fa').attr('class','fa');
                field.find('.social-repeater-remove-social-item').show();
                field.find('.customizer-repeater-social-repeater-link').val('');
                field.find('.customizer-repeater-social-repeater-id').val(id);
                th.find('.customizer-repeater-social-repeater-container:first').parent().append(field);
            }
        }
        return false;
    });

    flixita_theme_controls.on('click', '.social-repeater-remove-social-item', function (event) {
        event.preventDefault();
        var th = jQuery(this).parent();
        var repeater = jQuery(this).parent().parent();
        th.remove();
        flixita_customizer_repeater_refresh_social_icons(repeater);
        return false;
    });

    flixita_theme_controls.on('keyup', '.customizer-repeater-social-repeater-link', function (event) {
        event.preventDefault();
        var repeater = jQuery(this).parent().parent();
        flixita_customizer_repeater_refresh_social_icons(repeater);
        return false;
    });

    flixita_theme_controls.on('change', '.customizer-repeater-social-repeater-container .icp', function (event) {
        event.preventDefault();
        var repeater = jQuery(this).parent().parent().parent();
        flixita_customizer_repeater_refresh_social_icons(repeater);
        return false;
    });

});

var flixitaentityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    '\'': '&#39;',
    '/': '&#x2F;'
};

function flixitaescapeHtml(string) {
    'use strict';
    //noinspection JSUnresolvedFunction
    string = String(string).replace(new RegExp('\r?\n', 'g'), '<br />');
    string = String(string).replace(/\\/g, '&#92;');
    return String(string).replace(/[&<>"'\/]/g, function (s) {
        return flixitaentityMap[s];
    });

}