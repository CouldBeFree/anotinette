<footer class="page-footer outer" role="contentinfo">
  <div class="footer-block">
    <h3><?php echo get_theme_mod('footer_header'); ?></h3>
    <p class="subtitle"><?php echo get_theme_mod('footer_subtitle'); ?></p>
    <div class="form-holder">
        <?php echo do_shortcode( '[contact-form-7 id="43" title="Footer form"]' ); ?>
    </div>
    <div class="logo-holder">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_theme_mod('footer'); ?>" alt="logo">
      </a>
    </div>
    <div class="contact-block">
      <p class="get-theme"><a href="mailto:<?php echo get_theme_mod('about_header'); ?>"><?php echo get_theme_mod('about_header'); ?></a></p>
      <p class="get-theme"><?php echo get_theme_mod('footer-contact'); ?></p>
    </div>
    <div class="social">
      <p class="label">Follow me</p>
      <ul class="social-holder">
        <li>
          <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank">
            <span class="icon-twitter-logo-silhouette"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank">
            <span class="icon-instagram"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank">
            <span class="icon-facebook-logo"></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="inner">
    <span class="top"></span>
    <span class="bottom"></span>
    <span class="left"></span>
    <span class="right"></span>
    <span class="bottom-left"></span>
    <span class="bottom-right"></span>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>