<?php
/**
 * Filename: page.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>

<?php get_header(); ?>
	<div class="container page">
		<div class="row">
			<div class="col-md-8">
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content', 'page' );
					endwhile;
				?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>	
	</div>

<?php get_footer();
