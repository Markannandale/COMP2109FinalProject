<?php
/**
 * The template for displaying all single posts
*/

get_header('shop');
?>
<div class="wrap">
	<?php
		/**
		* woocommerce_before_main_content hook.
		*
		* @hooked woocommerce_output_content_wrapper - 10 (outputs the opening divs for the content)
		* @hooked woocommerce_breadcrumb - 20
		*/
		do_action('woocommerce_before_main_content');
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php woocommerce_content(); ?>
		</main>
		<!-- <?php
			/**
			* woocommerce_sidebar hook
			*
			*@hooked woocommerce_get_sidebar - 10
			*/
			do_action('woocommerce_sidebar');
		?> -->
	</div>
</div>
<?php
get_footer('shop');
