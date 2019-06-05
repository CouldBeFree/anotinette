<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="page-header">

    <div class="outer">
      <nav class="main-nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'left-menu', 'container' => false ) ); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_theme_mod('logo'); ?>" alt="logo">
        </a>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'right-menu', 'container' => false ) ); ?>
      </nav>
    </div>

	</header>