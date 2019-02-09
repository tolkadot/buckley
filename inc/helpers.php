<?php

//Add a Download Button to the audio file.
add_filter( 'wp_audio_shortcode', 'ast_audio_shortcode_enhancer', 10, 5 );
function ast_audio_shortcode_enhancer( $html, $atts, $audio, $post_id, $library ) {
            return $html . sprintf( '<p><button type="button"><a href="%s" download="%s">Download</a></button></p>', $atts[ 'mp3' ], get_the_title($post_id) );
}
