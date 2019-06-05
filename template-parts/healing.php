<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-image" style="background: url('<?php echo CFS()->get( 'healing_background' ); ?>') no-repeat; background-size: cover; background-position: 50% 50%">
      <?php the_post_thumbnail('thumbnail');?>
    <div class="slide-block">
        <?php the_title( '<h2 class="entry-title">', '</a></h2>' ); ?>
      <a href="<?php the_permalink()?>" target="_blank" class="post-link">
        <span class="top-left"></span>
        <span class="top-right"></span>
        <span class="bottom-right"></span>
        <span class="bottom-left"></span>
        More inforamtion
      </a>
    </div>
  </div>

  <div class="inner-block">
    <span class="border border-left"></span>
    <span class="border border-right"></span>
    <span class="border border-bottom"></span>
    <span class="border border-top"></span>
  </div>

</article>