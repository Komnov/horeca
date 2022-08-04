<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="mobile__header">
			<div class="mobile__header_container">
				<div class="mobile__header_logo">
					<a href="/">
						<img src="/wp-content/themes/storefront-child/assets/img/logo.svg" alt="">
					</a>
				</div>
				<div class="menu">
					<div class="burger">
						<span></span>
					</div>
				</div>
			</div>
			<div class="mobile__nav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
				<div class="mobile__nav_search">
                	<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			     <div class="img"></div>
            </div>
			</div>
		</div>
		<div class="container header__container">
			<div class="header__logo">
				<a href="/">
					<img src="/wp-content/themes/storefront-child/assets/img/logo.svg" alt="">
				</a>
			</div>
			<div class="header__nav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
			</div>
			<div class="header__search">
				
                <?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			     <div class="img"></div>
            </div>
		</div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
