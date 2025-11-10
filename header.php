<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head(); ?>
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

        <nav class="main-navigation">
            <ul class="header-menu-list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#gallery">Галерея</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#prices">Ціни</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#schedule">Розклад</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#news">Новини</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#partners">Команда та партнери</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#rules">Правила</a></li>
            </ul>
        </nav>
        <div class="header-cta">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#zapis" class="btn btn-solid">Записатись</a>
        </div>

        <button class="burger-menu" aria-label="Відкрити меню">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<div class="mobile-menu-container">
    <nav class="mobile-navigation">
         <ul class="mobile-menu-list">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#gallery">Галерея</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#prices">Ціни</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#schedule">Розклад</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#news">Новини</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#partners">Команда та партнери</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#rules">Правила</a></li>
         </ul>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#zapis" class="btn btn-solid mobile-menu-btn">Записатись</a>
    </nav>
</div>