<?php
/**
 * Filename: header.php
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

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="<?php get_body_class(); ?>" role="document">
	
	<?php get_template_part( 'navigation'); ?>

	<div id="main" class="site-main">

