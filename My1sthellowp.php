<?php
/**
 * @package My1sthellowp
 * @version 1.0.0
 */
/*
Plugin Name: My1sthellowp
Plugin URI: https://github.com/JuniorTak/My1sthellowp
Description: This is my first WordPress plugin. It creates a shortcode to display a custom Google Map
Version: 1.0.0
License: GPLv2
Author: Hyppolite T.
Author URI: https://www.hyppolitetakouafoduop.online
*/

/* Shortcode – Google Maps Integration */
function fn_googleMaps($atts, $content = null) {
   extract(shortcode_atts(array(
      "width" => '100%',
      "height" => '420',
      "src" => 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1989.9103126465243!2d9.7206582!3d4.0569695!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2scm!4v1690665491625!5m2!1sen!2scm'
   ), $atts));
   return '<iframe width="' . $width . '" height="' . $height . '" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="' . $src . '&amp;output=embed"></iframe>';
}
add_shortcode("googlemap", "fn_googleMaps") ;
?>