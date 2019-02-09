<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$genre = "";

?>




<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<main class="site-main" id="main">

		<div class="row">



			



<div class="col-8">
	<div calss="landing-wrapper">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php 

						$taxonomy = 'genres';
						$terms = wp_get_post_terms( $post->ID, $taxonomy);
						$current_genre = ($terms[0]->slug);
						$current_genre_name = ($terms[0]->name);


					?>

					<?php $duration = get_field( "duration" ); ?>
					<?php $instrumentation = get_field( "instrumentation" ); ?>
					<?php $genre = get_field( "genre" ); ?>
					<?php $year = get_field( "year" ); ?>

 					<div><?php echo $duration ?></div>
 					<div><?php echo $instrumentation ?></div>
 					<div><?php echo $year ?></div>
 					<div><?php echo $genre ?></div>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>




				<?php endwhile; // end of the loop. ?>
</div></div>
<div class="col-4">	
<?php $args = array( 'post_type' => 'compositions', 
					    'tax_query' => array(
						        array (
						            'taxonomy' => 'genres',					       
						            'field' => 'slug',
            						'terms' => $current_genre,

						        )
						    ),
						    'posts_per_page'=>'-1' 
					);?>
					<div><?php echo $current_genre_name?></div>
					<?php $query = new WP_Query( $args );?>
 					<?php if ( $query->have_posts() ) {  
 						while ( $query->have_posts() ) {
 
        				$query->the_post();
        			//get_template_part( 'loop-templates/content', get_post_format() );
					the_title( sprintf( '<p><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></p>' ); 
   					 }				
 					}
			
  wp_reset_postdata();
  wp_reset_query();
					?>
	</div>	

</div>

</main><!-- #main -->

		</div><!-- #primary -->

		
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
