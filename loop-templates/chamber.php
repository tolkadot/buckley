<?php $args = array( 'post_type' => 'compositions',
					    'tax_query' => array(
						        array (
						            'taxonomy' => 'genres',
						            'terms' => 5,
						        ),
						    ),
                'meta_key'		=> 'year',
                'orderby'   => 'meta_value_num',
						    'posts_per_page'=>'-1'
					);
			 $query = new WP_Query( $args );
 			 if ( $query->have_posts() ) {
 					while ( $query->have_posts() ) {
 						  $query->the_post();
        		  $id = get_the_ID();
              get_template_part( 'loop-templates/card', 'none' );
   					    }
 					   }
	  wp_reset_postdata();
    wp_reset_query();
					?>
