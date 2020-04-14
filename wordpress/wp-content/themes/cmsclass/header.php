<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/cmsclass/inc/css/styles.css'));?>">
    <!-- Link JS -->
    <!-- Add fonts -->
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

	<header id="masthead">
		<article>
			<!-- logo container -->
			<img src="PCGLogo.jpg">
		</article>
		<nav>
			<?php
				wp_nav_menu(
					array(
						'menu' => 'main', // Do not fall back to first non-empty menu
						'theme-location' => '',
						'fallback_cb' => false // Do not fall back to wp_page_menu()
						)
					);
			?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
