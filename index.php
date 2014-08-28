<?php
/**
 * Filename: index.php
 * Project: Koodikerho.fi
 * Copyright: (c) 2014 Seravo
 */

?>
<!DOCTYPE html>

<html lang="fi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

  <!-- Header scripts -->
  <?php wp_head(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="<?php get_body_class(); ?>" role="document">

  <h1><?php bloginfo('name'); ?></h1>

  <?php
    wp_nav_menu( array(
      'menu'              => 'primary',
      'theme_location'    => 'primary',
      'container'         => 'div',
      'container_class'   => 'navbar-collapse collapse',
      'container_id'      => 'navbar-collapse-1',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker(),
    ));
  ?>

  <!-- Start the loop -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>

      <h2><?php the_title(); ?></h2>

      <?php the_content(); ?>

    </article>

  <?php endwhile; else : ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>

  <!-- End the loop -->

  <!-- Footer scripts -->
  <?php wp_footer(); ?>
</body>
</html>
