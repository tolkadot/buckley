<?php

//Add a Download Button to the audio file.
add_filter( 'wp_audio_shortcode', 'ast_audio_shortcode_enhancer', 10, 5 );
function ast_audio_shortcode_enhancer( $html, $atts, $audio, $post_id, $library ) {
            return $html . sprintf( '<p><button type="button"><a href="%s" download="%s">Download</a></button></p>', $atts[ 'mp3' ], get_the_title($post_id) );
}

/* modify understrap blog post excerpt */
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . '<p><a class="btn btn-secondary understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More',
			'understrap' ) . '</a></p>';
		}
		return $post_excerpt;
	}

add_filter( 'pre_get_posts', 'buckley_search' );
function buckley_search( $query ) {
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'post', 'news', 'compositions', 'recordings', 'events' ) );
    }
    return $query;
}
