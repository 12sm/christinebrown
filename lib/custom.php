<?php
//Trim mp3 title length with [trim]

add_shortcode('trim', 'trim_shortcode');
function trim_shortcode($atts, $content = '') {
  $content = wpv_do_shortcode($content);
  if (strlen($content) > 20) {
    $content = substr($content, 0, 20) . '…';
  }
  return $content;
}

define( 'UPLOADS', ''.'assets' );

?>
