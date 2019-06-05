<?php
/*
 * Template Name: Home template
 */
?>

<?php get_header(); ?>

  <main id="main" class="page-main" role="main">

    <div class="outer">
      <section class="banner" id="banner" style="background: url('<?php echo CFS()->get( "banner_image"); ?>') no-repeat; background-size: cover; background-position-x: center">
        <div class="inner">
          <span class="top"></span>
          <span class="bottom"></span>
          <span class="left"></span>
          <span class="right"></span>
          <span class="bottom-left"></span>
          <span class="bottom-right"></span>
        </div>
        <h1>
          <span>
              <?php echo CFS()->get( "banner_title_name"); ?>
          </span>
          <span>
                <?php echo CFS()->get( "banner_title_sub"); ?>
          </span>
        </h1>
      </section>
      <section class="introduction">
        <div class="section-wrap">
          <h2><?php echo CFS()->get( "introduction_headline"); ?></h2>
          <p class="content"><?php echo CFS()->get( "introduction_content"); ?></p>
          <p class="bottom-text"><?php echo CFS()->get( "introduction_bottom"); ?></p>
        </div>
      </section>
      <section class="healing-option">
          <?php
          $args = [
              'post_type' => 'Healing',
              'posts_per_page' => 3,
              'order' => 'ASC'
          ];

          query_posts($args);

          while (have_posts()) : the_post();

              get_template_part('template-parts/healing', 'posts');

              // If comments are open or we have at least one comment, load up the comment template.
              if (comments_open() || get_comments_number()) :
                  comments_template();
              endif;

          endwhile; // End of the loop.

          wp_reset_query()
          ?>
      </section>
    </div>
  </main>

<?php get_footer(); ?>