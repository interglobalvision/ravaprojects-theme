<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
get_template_part('partials/globie');
get_template_part('partials/seo');
?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">

<?php if (is_singular() && pings_open(get_queried_object())) { ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php } ?>

  <?php
    wp_head();

    $options = get_site_option('_igv_site_options');
    $bg_color = !empty($options['design_bg_color']) ? $options['design_bg_color'] : null;
    $font_color = !empty($options['design_font_color']) ? $options['design_font_color'] : null;
    $nav_color = !empty($options['design_nav_color']) ? $options['design_nav_color'] : null;
    $nav_font_color = !empty($options['design_nav_font_color']) ? $options['design_nav_font_color'] : null;
    $nav_logo = !empty($options['design_nav_logo']) ? $options['design_nav_logo'] : null;
  ?>
  <style type="text/css">
    html, body {
      background-color: <?php echo $bg_color; ?>;
      color: <?php echo $font_color; ?>;
    }
  </style>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<section id="main-container">

  <header id="header" class="grid-row align-items-center" style="background-color: <?php echo $nav_color; ?>; color: <?php echo $nav_font_color; ?>;">
    <?php
      $about_page = get_page_by_path( 'acercade' );
    ?>
    <nav id="main-nav">
      <ul class="grid-row align-items-center">
        <li class="grid-item">
          <a href="<?php echo home_url(); ?>">
          <?php if (!empty($nav_logo)) { ?>
            <h1 class="u-visuallyhidden"><?php bloginfo('name'); ?></h1>
            <img src="<?php echo $nav_logo; ?>" alt="<?php bloginfo('name'); ?>"/>
          <?php } else { ?>
            <h1 class="font-size-basic"><?php bloginfo('name'); ?></h1>
          <?php } ?>
          </a>
        </li>
        <li class="grid-item">
          <a href="<?php echo get_permalink($about_page->ID); ?>"><?php echo get_the_title($about_page->ID); ?></a>
        </li>
      </ul>
    </nav>
  </header>
