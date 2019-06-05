<?php
/*
 * Template Name: About Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

  <div class="outer">
    <section class="banner" id="banner" style="background: url('<?php echo CFS()->get( "banner_background"); ?>') no-repeat; background-size: cover; background-position-x: center">
      <div class="inner">
        <span class="top"></span>
        <span class="bottom"></span>
        <span class="left"></span>
        <span class="right"></span>
        <span class="bottom-left"></span>
        <span class="bottom-right"></span>
      </div>
      <h1><?php echo CFS()->get( "about_headline"); ?></h1>
    </section>
    <section class="content">
      <div class="container-inner">
        <div class="top">
          <h2><?php echo CFS()->get( "headline"); ?></h2>
          <p class="center-text"><?php echo CFS()->get( "content"); ?></p>
          <div class="about-image" style="background: url('<?php echo CFS()->get( "image"); ?>') no-repeat; background-size: cover; background-position-x: center">
            <div class="inner">
              <span class="top"></span>
              <span class="bottom"></span>
              <span class="left"></span>
              <span class="right"></span>
              <span class="bottom-left"></span>
              <span class="bottom-right"></span>
            </div>
          </div>
        </div>
        <div class="middle">
          <h2><?php echo CFS()->get( "journey_headline"); ?></h2>
          <div class="middle-holder">
            <p><?php echo CFS()->get( "journey_content"); ?></p>
            <div class="middle-image" style="background: url('<?php echo CFS()->get( "journey_image"); ?>') no-repeat; background-size: cover; background-position-x: center">
              <div class="inner">
                <span class="top"></span>
                <span class="bottom"></span>
                <span class="left"></span>
                <span class="right"></span>
                <span class="bottom-left"></span>
                <span class="bottom-right"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom">
          <h2><?php echo CFS()->get( "get_headline"); ?></h2>
          <p class="center-text"><?php echo CFS()->get( "get_content"); ?></p>
          <div class="about-image" style="background: url('<?php echo CFS()->get( "get_image"); ?>') no-repeat; background-size: cover; background-position-x: center">
            <div class="inner">
              <span class="top"></span>
              <span class="bottom"></span>
              <span class="left"></span>
              <span class="right"></span>
              <span class="bottom-left"></span>
              <span class="bottom-right"></span>
            </div>
          </div>
        </div>
        <div class="additional-block">
          <div class="ornament"></div>
          <div class="list-item">
            <h3><?php echo CFS()->get( "bottom_headline"); ?></h3>
              <?php echo CFS()->get( "bottom_list"); ?>
          </div>
          <div class="quote-block">
            <p class="quote-text"><?php echo CFS()->get( "bottom_quote"); ?></p>
            <p class="quote-author"><?php echo CFS()->get( "qoute_author"); ?></p>
          </div>
        </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>
