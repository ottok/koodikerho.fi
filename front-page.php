<?php
/**
 * Filename: front-page.php
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

<header>
<h1 class="sitetitle">Koodikerho.fi</h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/koodikerho.fi-logo.png" alt="Koodikerho.fi logo" id="logo">
</header>

<canvas id="text" width="500" height="100"></canvas>
<canvas id="stage" width="500" height="100"></canvas>

<div id="signup">
<?php

$widgetNL = new WYSIJA_NL_Widget(true);
echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));

/*
<form id="signup">
    <input type="text" id="email" value="" placeholder="oma@osoitteesi.fi" />
    <input type="submit" value="Haluan ilmoituksen kun sivusto avataan"/>
</form>
*/?>
</div>

<footer>
<small><a href="https://github.com/ottok/koodikerho.fi">Näytä lähdekoodi</a></small>
</footer>

<!-- Footer scripts -->
<?php wp_footer(); ?>

</body>
</html>
