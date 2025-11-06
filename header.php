<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head();  ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="site-header-container">
        
        <div class="site-logo">
    <?php
    if ( has_custom_logo() ) {
        
        the_custom_logo();
    } else {
        
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/media/default-logo.png" alt="<?php bloginfo('name'); ?>">
        </a>
        <?php
    }
    ?>
</div>

        <nav class="header-navigation">
            <a href="#pro-klub" class="btn btn-outline">Про клуб</a>
            <a href="#zapis" class="btn btn-solid">Записатись</a>
        </nav>

    </div>
</header>