<?php
/**
 * Filename: sidebar.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>

<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
