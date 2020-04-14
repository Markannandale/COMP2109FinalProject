<?php
/**
 * Template Name: About Template
 * The about page template file
 */
 get_header ();
 /** require 'header.php'; **/
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <!-- Let's use the featured image for the masthead image -->
    <?php $masthead_background = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');?>
    <section class="masthead" style="background-image: url(<?php echo $masthead_background['0'];?>);">
      <article>
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
      </article>
    </section>
    <section class="the-page-content">
      <?php
        // Start the loop to get the pages content
        while(have_posts()) : the_post();
      ?>
      <!-- Note that the_content() works only inside a WP Loop -->
      <div class="entry-content-page">
        <?php the_content(); ?> <!-- Page Content -->
      </div>
      <?php
			endwhile; // end the loop
    		wp_reset_query(); //resetting the page query
    	?>
    </section>
  </main>
</div>
<?php
get_footer();