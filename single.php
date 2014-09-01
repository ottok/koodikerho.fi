<?php
/**
 * Filename: single.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>

<?php get_header(); ?>

<div class="container single-post">
	<div class="row">
		<div class="col-md-8">
			<?php
				while ( have_posts() ) : the_post();
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;
				?>		
					<div class="entry-meta">	
				<?php
					if ( 'post' == get_post_type() )
						the_time('d.m.Y');

					the_tags('<br>Aiheet: ');
				?>
					</div>
				<?php 				
					the_content();	

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}				
				endwhile;
			?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
	
	
</div>

<?php get_footer();
