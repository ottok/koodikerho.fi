<?php
/**
 * Filename: content.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
<?php
 	if ( is_single() ) :
		the_title( '<h1>', '</h1>' );
	else :
		the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	endif;
?>

<div class="entry-meta">
	<?php
		if ( 'post' == get_post_type() )
			the_time('d.m.Y');

		the_tags('<br>Aiheet: ');
	?>
</div><!-- .entry-meta -->

</header><!-- .entry-header -->

<div class="entry-summary">
	<?php the_excerpt(); ?>
</div><!-- .entry-summary -->

<?php if ( !is_single() ) : ?>
	<div>
		<a href="<?php echo get_permalink(); ?>">Lue lisää</a>
	</div>
<?php endif; ?>


</article><!-- #post-## -->
