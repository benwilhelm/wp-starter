<?php 

add_action('init','dbdg_init') ;
function dbdg_init() {
  unregister_sidebar('secondary-widget-area') ;
  unregister_sidebar('first-footer-widget-area') ;
  unregister_sidebar('second-footer-widget-area') ;
  unregister_sidebar('third-footer-widget-area') ;
  unregister_sidebar('fourth-footer-widget-area') ;
}