<?php

/**
 * @package WordPress
 * @subpackage BourbonWP
 */

get_header(); ?>

<div class="row">
  	<div class="span8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php get_template_part( 'paginate' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
