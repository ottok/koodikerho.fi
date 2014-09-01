<?php
/**
 * Filename: index.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>

<?php get_header(); ?>

<header>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/koodikerho.fi-logo.png" alt="Koodikerho.fi logo" id="logo">
</header>

<div id="main-content" class="container">
	
	<div class="row">
		<div class="col-md-16 col-md-offset-2">
			<canvas id="text"></canvas>
			<canvas id="stage"></canvas> 
		</div>
	
		<div id="signup" class="col-md-8 col-md-offset-3">
			<?php
				$widgetNL = new WYSIJA_NL_Widget(true);
				echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
			?>
			<div class="col-md-8 col-md-offset-2">
				<div class="site-source"><small><a href="https://github.com/ottok/koodikerho.fi">Näytä lähdekoodi</a></small></div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-bottom:100px;"></div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;

				else :
					get_template_part( 'content', 'none' );
				endif;
		?>
	</div>
</div>

<?php get_footer(); 

