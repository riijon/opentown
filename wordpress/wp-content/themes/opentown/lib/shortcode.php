<?php
/**
 * Created by PhpStorm.
 * User: RikuTakenaka
 * Date: 2018/05/19
 * Time: 18:07
 */

/* --------------------------------------------------
  short code
-------------------------------------------------- */
add_shortcode('gtdu', 'shortcode_gtdu');
function shortcode_gtdu() {
  return get_template_directory_uri();
}

