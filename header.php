<!doctype html>

<html>
<head><title>A Basic Starting Point</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

<header>
  <a href="<?php bloginfo('url'); ?>" title="Home">
    <?php bloginfo('name'); ?>
  </a>
</header>

<nav>
    <?php wp_nav_menu(); ?>
</nav>