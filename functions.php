<?php


require_once('inc/compositions_ctp.php');
require_once('inc/recordings_ctp.php');
require_once('inc/rename-posts-to-news.php');
require_once('inc/social-shares.php');
require_once('inc/news-meta.php');
require_once('inc/enqueue.php');
require_once('inc/helpers.php');



add_action( 'admin_bar_menu', 'show_template' );
function show_template() {
global $template;
print_r( $template );
}
