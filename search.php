<?php
/**
 * @package WordPress
 * @subpackage BourbonWP
 */

get_header(); ?>

<div class="row">
    <div class="span8">
    
        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bourbonwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; ?>

                <?php _s_content_nav( 'nav-below' ); ?>

            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

            </main><!-- #main -->
        </section><!-- #primary -->

    </div>
    <div class="span4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
