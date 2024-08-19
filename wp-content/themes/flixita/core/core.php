<?php
// Includes files
require_once get_template_directory() . '/core/theme-menu/class-bootstrap-navwalker.php';
require_once get_template_directory() . '/core/custom-header.php';
require_once get_template_directory() . '/core/customizer/flixita-default-options.php';
require_once get_template_directory() . '/core/customizer/customizer.php';
require_once get_template_directory() . '/core/customizer/customizer-repeater/inc/customizer.php';


// Register Google fonts
function flixita_site_get_google_font()
{

    $font_families = array('Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900');

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'core/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

// Enqueue scripts and styles.
add_action( 'wp_enqueue_scripts', 'flixita_theme_scripts' );
function flixita_theme_scripts() {
	
	// Styles	
	wp_enqueue_style(
		'bootstrap-min',
		get_template_directory_uri().'/assets/css/bootstrap.min.css'
	);
	
	wp_enqueue_style(
		'owl-carousel-min',
		get_template_directory_uri().'/assets/css/owl.carousel.min.css'
	);
	
	wp_enqueue_style(
		'font-awesome',
		get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css'
	);
	
	wp_enqueue_style(
		'animate',
		get_template_directory_uri().'/assets/css/animate.min.css'
	);

	wp_enqueue_style(
		'flixita-main',
		get_template_directory_uri() . '/assets/css/main.css'
	);
	
	wp_enqueue_style(
		'flixita-media-query', 
		get_template_directory_uri() . '/assets/css/responsive.css'
	);
	
	wp_enqueue_style(
		'flixita-fonts', 
		flixita_site_get_google_font(),
		array(), 
		null
	);
	
	
	wp_enqueue_style( 
		'flixita-style', 
		get_stylesheet_uri() 
	);
	
	
	// Page Header Style
	$page_header_img_opacity = get_theme_mod('page_header_img_opacity', flixita_get_default_option( 'page_header_img_opacity' ));
	$page_header_bg_color = get_theme_mod('page_header_bg_color', flixita_get_default_option( 'page_header_bg_color' ));
	
	$output_style = '';
	if (has_header_image())
	{
		$output_style .= ".breadcrumb-area:after {
				background-color: " . esc_attr($page_header_bg_color) . ";
				opacity: " . esc_attr($page_header_img_opacity) . ";
			}\n";
	}

	// Logo Style
	 $logo_size = get_theme_mod('logo_size', flixita_get_default_option( 'logo_size' ));
	 $output_style .= ".logo img, .mobile-logo img {max-width: " . esc_attr($logo_size) . "px;}\n";

	wp_add_inline_style(
		'flixita-style', 
		$output_style
	);
	
	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script(
		'bootstrap', 
		get_template_directory_uri() . '/assets/js/bootstrap.min.js', 
		array('jquery'), 
		false, 
		true
	);

	wp_enqueue_script(
		'owl-carousel', 
		get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 
		array('jquery'), 
		false, 
		true
	);
	
	wp_enqueue_script(
		'wow-min', 
		get_template_directory_uri() . '/assets/js/wow.min.js', 
		array('jquery'), 
		false, 
		false, 
		true
	);

	wp_enqueue_script(
		'flixita-custom-js', 
		get_template_directory_uri() . '/assets/js/custom.js', 
		array('jquery'), 
		false, 
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'admin_enqueue_scripts', 'flixita_theme_admin_scripts' );
function flixita_theme_admin_scripts() {
	wp_enqueue_style(
		'flixita-admin-style',
		FLIXITA_THEME_CORE_URI . '/customizer/assets/css/admin.css'
	);
	wp_enqueue_script( 
		'flixita-admin-script', 
		FLIXITA_THEME_CORE_URI . '/customizer/assets/js/admin-script.js',
		array( 'jquery' ), '',
		true
	);
    wp_localize_script( 
	'flixita-admin-script', 
	'flixita_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}	
// Register widget area
add_action( 'widgets_init', 'flixita_widgets_init' );
function flixita_widgets_init() {
	
	// Sidebar Widget
	register_sidebar( 
		array(
			'name' => __( 'Main Sidebar Widget', 'flixita' ),
			'id' => 'sidebar-primary',
			'description' => __( 'Main Sidebar Widget', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 1
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 1', 'flixita' ),
			'id' => 'footer-sidebar-1',
			'description' => __( 'The Footer Widget Area 1', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 2
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 2', 'flixita' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'The Footer Widget Area 2', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 3
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 3', 'flixita' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'The Footer Widget Area 3', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		)
	);
	
	// Footer Sidebar 4
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 4', 'flixita' ),
			'id' => 'footer-sidebar-4',
			'description' => __( 'The Footer Widget Area 4', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);

	// WooCommerce Sidebar
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( 
			array(
				'name' => __( 'WooCommerce Sidebar', 'flixita' ),
				'id' => 'sidebar-woocommerce',
				'description' => __( 'This Widget area for WooCommerce Widget', 'flixita' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h5 class="widget-title">',
				'after_title' => '</h5>',
			) 
		);
	}
}



// sticky menu
if (!function_exists('flixita_site_header_sticky')):
    function flixita_site_header_sticky()
    {
        $enable_hdr_sticky = get_theme_mod('enable_hdr_sticky', flixita_get_default_option( 'enable_hdr_sticky' ));

        if ($enable_hdr_sticky == '1'): return 'is-sticky-on'; endif;
    }
endif;


// Flixita Section  Header
if (!function_exists('flixita_section_header')):
    function flixita_section_header($title, $subtitle, $description)
    {
        if (!empty($title) || !empty($subtitle) || !empty($description)): ?>
			<div class="row">
				<div class="col-lg-6 col-12 mx-lg-auto mb-5 text-center">
					<div class="theme-main-heading wow fadeInUp">
						<?php if (!empty($title)): ?><span class="title"><?php echo wp_kses_post($title); ?></span><?php endif; ?>
						
						<?php if (!empty($subtitle)): ?><h2><?php echo wp_kses_post($subtitle); ?></h2><?php endif; ?>
						
						<?php if (!empty($description)): ?><p><?php echo wp_kses_post($description); ?></p><?php endif; ?>	
					</div>
				</div>
			</div>
		<?php
        endif;
    }
endif;

if (!function_exists('flixita_section_header_white')):
    function flixita_section_header_white($title, $subtitle, $description)
    {
        if (!empty($title) || !empty($subtitle) || !empty($description)): ?>
			<div class="row">
				<div class="col-lg-6 col-12 mx-lg-auto mb-5 text-center">
					<div class="theme-main-heading theme-white-heading wow fadeInUp">
						<?php if (!empty($title)): ?><span class="title"><?php echo wp_kses_post($title); ?></span><?php endif; ?>
						
						<?php if (!empty($subtitle)): ?><h2><?php echo wp_kses_post($subtitle); ?></h2><?php endif; ?>
						
						<?php if (!empty($description)): ?><p><?php echo wp_kses_post($description); ?></p><?php endif; ?>	
					</div>
				</div>
			</div>
		<?php
        endif;
    }
endif;

// Adds custom classes to the array of body classes.
add_filter('body_class', 'flixita_get_body_classes');
function flixita_get_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()){ $classes[] = 'group-blog'; }

    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()){ $classes[] = 'hfeed'; }

    return $classes;
}

/**
 * Add WooCommerce Cart Icon With Cart Count 
 */
add_filter('woocommerce_add_to_cart_fragments', 'flixita_woo_add_to_cart_fragment');
function flixita_woo_add_to_cart_fragment($fragments)
{

    ob_start();
    $count = WC()
        ->cart->cart_contents_count;
?> 
	<button type="button" class="cart-icon-wrap header-cart"><i class="fa fa-shopping-bag"></i>
	<?php
    if ($count > 0)
    {
?>
        <span><?php echo esc_html($count); ?></span>
	<?php
    }
    else
    {
?>	
		<span><?php esc_html_e('0','flixita'); ?></span>
	<?php
    }
?></button><?php
    $fragments['.cart-icon-wrap'] = ob_get_clean();

    return $fragments;
}

// Page Title
if (!function_exists('flixita_page_title'))
{
    function flixita_page_title()
    {

        if (is_home() || is_front_page()): single_post_title();

        elseif (is_day()): printf(__('Daily Archives: %s', 'flixita') , get_the_date());

        elseif (is_month()): printf(__('Monthly Archives: %s', 'flixita') , (get_the_date('F Y')));

        elseif (is_year()): printf(__('Yearly Archives: %s', 'flixita') , (get_the_date('Y')));

        elseif (is_category()): printf(__('Category Archives: %s', 'flixita') , (single_cat_title('', false)));

        elseif (is_tag()): printf(__('Tag Archives: %s', 'flixita') , (single_tag_title('', false)));

        elseif (is_404()): printf(__('Error 404', 'flixita'));

        elseif (is_author()): printf(__('Author: %s', 'flixita') , (get_the_author('', false)));

        elseif (class_exists('woocommerce')):

            if (is_shop()) { woocommerce_page_title(); }
			elseif (is_cart()){ the_title(); }
            elseif (is_checkout()) { the_title();}
			else { the_title();}
            else: the_title();
		endif;
        }
    }

// Page Header
function flixita_page_header()
{
	global $post;

		echo '<li><a href="' . esc_url(home_url()) . '">' . esc_html_e('Home','flixita') . '</a> ' . '&nbsp::&nbsp';

		if (is_category())
		{
			$thisCat = get_category(get_query_var('cat') , false);
			if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, true, ' ' . ' ');
			echo '<li class="active">' . esc_html__('Archive by category', 'flixita') . ' "' . esc_html(single_cat_title('', false)) . '"' . '</li>';

		}

		elseif (is_search())
		{
			echo '<li class="active">' . esc_html__('Search results for ', 'flixita') . ' "' . esc_html(get_search_query()) . '"' . '</li>';
		}

		elseif (is_day())
		{
			echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . '&nbsp::&nbsp';
			echo '<a href="' . esc_url(get_month_link(get_the_time('Y') , get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a> ' . '&nbsp::&nbsp';
			echo '<li class="active">' . esc_html(get_the_time('d')) . '</li>';
		}

		elseif (is_month())
		{
			echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> &nbsp::&nbsp';
			echo '<li class="active">' . esc_html(get_the_time('F')) . '</li>';
		}

		elseif (is_year())
		{
			echo '<li class="active">' . esc_html(get_the_time('Y')) . '</li>';
		}

		elseif (is_single() && !is_attachment())
		{
			if (get_post_type() != 'post')
			{
				if (class_exists('WooCommerce'))
				{
					 echo ' &nbsp&nbsp' . '<li class="active">' . wp_kses_post(get_the_title()) . '</li>';
				}
				else
				{
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					echo '<a href="' . esc_url(home_url()) . '/' . $slug['slug'] . '/">' . $post_type
						->labels->singular_name . '</a>';
					 echo ' &nbsp::&nbsp' . '<li class="active">' . wp_kses_post(get_the_title()) . '</li>';
				}
			}
			else
			{
				$cat = get_the_category();
				$cat = $cat[0];
				$cats = get_category_parents($cat, true, ' &nbsp::&nbsp');
				$cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
				echo $cats;
				echo '<li class="active">' . esc_html(get_the_title()) . '</li>';
			}

		}

		elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404())
		{
			if (class_exists('WooCommerce'))
			{
				if (is_shop())
				{
					$thisshop = woocommerce_page_title();
				}
			}
			else
			{
				$post_type = get_post_type_object(get_post_type());
				echo '<li class="active">' . $post_type
					->labels->singular_name . '</li>';
			}
		}

		elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404())
		{
			$post_type = get_post_type_object(get_post_type());
			echo '<li class="active">' . $post_type
				->labels->singular_name . '</li>';
		}

		elseif (is_attachment())
		{
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID);
			if (!empty($cat))
			{
				$cat = $cat[0];
				echo get_category_parents($cat, true, ' &nbsp::&nbsp');
			}
			echo '<a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a>';
			echo '<li class="active">' . esc_html(get_the_title()) . '</li>';

		}

		elseif (is_page() && !$post->post_parent)
		{
			echo '<li class="active">' . esc_html(get_the_title()) . '</li>';
		}

		elseif (is_page() && $post->post_parent)
		{
			$parent_id = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id)
			{
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>' . '&nbsp::&nbsp';
				$parent_id = $page->post_parent;
			}

			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0;$i < count($breadcrumbs);$i++)
			{
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs) - 1) echo '&nbsp::&nbsp';
			}
			echo  '<li class="active">' . esc_html(get_the_title()) . '</li>';

		}
		elseif (is_tag())
		{
			echo '<li class="active">' . esc_html__('Posts tagged ', 'flixita') . ' "' . esc_html(single_tag_title('', false)) . '"' . '</li>';
		}

		elseif (is_author())
		{
			global $author;
			$userdata = get_userdata($author);
			echo '<li class="active">' . esc_html__('Articles posted by ', 'flixita') . '' . $userdata->display_name . '</li>';
		}

		elseif (is_404())
		{
			echo '<li class="active">' . esc_html__('Error 404 ', 'flixita') . '</li>';
		}

		if (get_query_var('paged'))
		{
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo '';
			echo ' ( ' . esc_html__('Page', 'flixita') . '' . esc_html(get_query_var('paged')) . ' )';
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo '';
		}

		echo '</li>';
}


/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_flixita_dismissed_notice_handler', 'flixita_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function flixita_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function flixita_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
            // Added the class "notice-get-started-class" so jQuery pick it up and pass via AJAX,
            // and added "data-notice" attribute in order to track multiple / different notices
            // multiple dismissible notice states ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="flixita-getting-started-notice clearfix">
                    <div class="flixita-theme-screenshot">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'flixita' ); ?>" />
                    </div><!-- /.flixita-theme-screenshot -->
                    <div class="flixita-theme-notice-content">
                        <h2 class="flixita-notice-h2">
                            <?php
                        printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                            esc_html__( 'Welcome! Thank you for choosing %1$s!', 'flixita' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                        ?>
                        </h2>

                        <p class="plugin-install-notice"><?php echo sprintf(__('Install and activate <strong>Daddy Plus</strong> plugin for taking full advantage of all the features this theme has to offer.', 'flixita')) ?></p>

                        <a class="flixita-btn-get-started button button-primary button-hero flixita-button-padding" href="#" data-name="" data-slug="">
						<?php
                        printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                            esc_html__( 'Get started with %1$s', 'flixita' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                        ?>
						
						</a><span class="flixita-push-down">
                        <?php
                            /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                            printf(
                                'or %1$sCustomize theme%2$s</a></span>',
                                '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                                '</a>'
                            );
                        ?>
                    </div><!-- /.flixita-theme-notice-content -->
                </div>
            </div>
        <?php }
}

add_action( 'admin_notices', 'flixita_deprecated_hook_admin_notice' );

/*******************************************************************************
 *  Plugin Installer
 *******************************************************************************/

add_action( 'wp_ajax_install_act_plugin', 'flixita_admin_install_plugin' );

function flixita_admin_install_plugin() {
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/daddy-plus' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'daddy-plus' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }

    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'daddy-plus/daddy-plus.php' );
    }
}	