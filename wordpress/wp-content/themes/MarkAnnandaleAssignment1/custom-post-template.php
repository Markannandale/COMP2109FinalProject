<?php 
    /** 
     * Template Name: Working with Post Templates
     * Template Post Type: post
    */
    get_header();
?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php 
                if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <div>
                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                    <p><?php the_author(); ?></p>
                    <p><?php echo get_the_date(); ?></p>
                    <p><?php the_tags(); ?></p>
                    <?php 
                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="scree-reader-text">' . __('Previous Post', 'twentynineteen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentynineteen' ) . '</span><span class="nav-title"><span class="nav-title-icon-wrapper">' . twentynineteen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                            )
                        ); 
                    ?>
                </div>
            </div>
            <?php endwhile ?>
            <?php endif ?>
            <article class="sidebar-container">
                <?php get_sidebar(); ?>
            </article>
            <section class="comment-section-container">
                <?php 
                    if ( comments_open() || get_comments_number() ) : comments_template();
                    endif;
                ?>
            </section>
        </main>
    </div>
</div>