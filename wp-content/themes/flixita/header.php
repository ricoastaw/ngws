<?php
/**
 * File for display Header.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>
<?php $class='btn-style-one'; ?>	
<body <?php body_class(esc_attr($class));?> >
<?php 
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    } 
?>
<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'flixita' ); ?></a>
<header id="main-header" class="main-header">
	<?php // Flixita Top Header
	do_action('daddy_plus_flixita_top_header'); ?>
	<div class="navigation-wrapper">
		<div class="main-navigation-area d-none d-lg-block">
			<div class="main-navigation <?php echo esc_attr(flixita_site_header_sticky()); ?> ">
				<div class="container">
					<div class="row">
						<div class="col-3 my-auto">
							<div class="logo">
							  <?php get_template_part('template-parts/site','branding'); ?>
							</div>
						</div>
						<div class="col-9 my-auto">
							<nav class="navbar-area">
								<div class="main-navbar">
								   <?php get_template_part('template-parts/site','main-nav'); ?>                           
								</div>
								<div class="main-menu-right">
									<ul class="menu-right-list">
										<?php 
											$enable_cart       = get_theme_mod( 'enable_cart',flixita_get_default_option( 'enable_cart' )); 
											 if ( $enable_cart == '1' && class_exists( 'WooCommerce' ) ) { ?>
												<li class="cart-wrapper">
													<button type="button" class="cart-icon-wrap header-cart">
														<i class="fa fa-shopping-bag"></i>
														<?php 
																$count = WC()->cart->cart_contents_count;
																$cart_url = wc_get_cart_url();
																
																if ( $count > 0 ) {
																?>
																	 <span><?php echo esc_html( $count ); ?></span>
																<?php 
																}
																else {
																	?>
																	<span><?php echo esc_html_e('0','flixita'); ?></span>
																	<?php 
																}
															?>
													</button>
													<div class="shopping-cart">
														<ul class="shopping-cart-items">
															<?php get_template_part('woocommerce/cart/mini','cart'); ?>
														</ul>
													</div>
												</li>
											<?php } ?>
										<?php 
										$enable_nav_search       = get_theme_mod( 'enable_nav_search',flixita_get_default_option( 'enable_nav_search' )); 
										if($enable_nav_search == '1') { ?>
											<li class="search-button">
												<button type="button" id="header-search-toggle" class="header-search-toggle" aria-expanded="false" aria-label="<?php echo esc_attr_e('Search Popup','flixita'); ?>"><i class="fa fa-search"></i></button>
												<div class="header-search-popup">
													<div class="header-search-flex">
														<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'flixita' ); ?>">
															<input type="search" class="form-control header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'flixita' ); ?>" name="s" id="search">
															<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
														</form>
														<button type="button" id="header-search-close" class="close-style header-search-close" aria-label="<?php echo esc_attr_e('Search Popup Close','flixita'); ?>"></button>
													</div>
												</div>
											</li>
										<?php } ?>
										
										<?php 
										$enable_hdr_btn  =	get_theme_mod('enable_hdr_btn',flixita_get_default_option( 'enable_hdr_btn' ));
										$hdr_btn_label  =	get_theme_mod('hdr_btn_label',flixita_get_default_option( 'hdr_btn_label' ));
										$hdr_btn_link   =	get_theme_mod('hdr_btn_link',flixita_get_default_option( 'hdr_btn_link' ));
										$hdr_btn_target = get_theme_mod('hdr_btn_target','');	
										if($enable_hdr_btn == '1' && !empty($hdr_btn_label)) { ?>
											<li class="button-area">
												<a href="<?php echo esc_url( $hdr_btn_link ); ?>" <?php if($hdr_btn_target == '1'): echo "target='_blank'"; endif;?> class="btn btn-primary"><?php echo esc_html( $hdr_btn_label ); ?></a>
											</li>
										<?php } ?>
										
									</ul>                            
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-mobile-nav <?php echo esc_attr(flixita_site_header_sticky()); ?>"> 
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-mobile-menu">
							<div class="mobile-logo">
								<div class="logo">
								   <?php get_template_part('template-parts/site','branding'); ?>
								</div>
							</div>
							<div class="menu-collapse-wrap">
								<div class="hamburger-menu">
									<button type="button" class="menu-collapsed" aria-label="<?php echo esc_attr_e('Menu Collaped','flixita'); ?>">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="main-mobile-wrapper">
								<div id="mobile-menu-build" class="main-mobile-build">
									<button type="button" class="header-close-menu close-style" aria-label="<?php echo esc_attr_e('Header Close Menu','flixita'); ?>"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>        
		</div>
	</div>
</header>
<div id="content" class="flixita-theme-data">
	