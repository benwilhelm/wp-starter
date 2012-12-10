<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<div id="fixed_container">
  <div class="column right">
    <img src="<?php bloginfo('stylesheet_directory') ?>/images/sidebar-heading-light-sig.jpg" alt="" id="sidebar_heading" />
		<?php wp_nav_menu( array( 'container_class' => 'menu-sidebar', 'theme_location' => 'primary' ) ); ?>
  
    <?php if (is_active_sidebar('primary-widget-area') ) : ?>
    <ul class="xoxo">
      <?php dynamic_sidebar( 'primary-widget-area' ) ; ?>
    </ul>
    <?php endif ; ?>

  </div><!-- .right -->
</div><!-- #fixed_container -->



