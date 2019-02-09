<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class=" hello" id="archive-wrapper">

	<div  id="content" tabindex="-1">

<?php /*$taxonomy = 'genres';
$terms = get_terms($taxonomy);
foreach ( $terms as $term ) {
            var_dump($term->slug);
 }
*/
 ?>
		<?php if ( have_posts() ) : ?>
		<main class="site-main" id="main">
		<div class="row">
<div class="col-4">
<div class="compositions-nav-container">
<div class="nav flex-column nav-pills genre-list-static" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active genre-item--1" id="v-pills-solo-tab" data-toggle="pill" href="#v-pills-solo" role="tab" aria-controls="v-pills-solo" aria-selected="false">solo</a>
  <a class="nav-link genre-item--2" id="v-pills-orchestral-tab" data-toggle="pill" href="#v-pills-orchestral" role="tab" aria-controls="v-pills-orchestral" aria-selected="false">orchestral</a>
  <a class="nav-link genre-item--3" id="v-pills-educational-tab" data-toggle="pill" href="#v-pills-educational" role="tab" aria-controls="v-pills-educational" aria-selected="false">educational</a>
   <a class="nav-link genre-item--4" id="v-pills-chamber-tab" data-toggle="pill" href="#v-pills-chamber" role="tab" aria-controls="v-pills-chamber" aria-selected="false">chamber</a>
  <a class="nav-link genre-item--5" id="v-pills-vocal-tab" data-toggle="pill" href="#v-pills-vocal" role="tab" aria-controls="v-pills-vocal" aria-selected="false">vocal</a>
  <a class="nav-link genre-item--6" id="v-pills-band-tab" data-toggle="pill" href="#v-pills-band" role="tab" aria-controls="v-pills-band" aria-selected="false">band</a>
 <a class="nav-link genre-item--7" id="v-pills-film-tab" data-toggle="pill" href="#v-pills-film" role="tab" aria-controls="v-pills-film" aria-selected="false">film</a>
  <a class="nav-link genre-item--8" id="v-pills-arrangements-tab" data-toggle="pill" href="#v-pills-arrangements" role="tab" aria-controls="v-pills-arrangements" aria-selected="false">arrangements</a>
 </div>
</div>
</div>


<?php

$cats = get_terms('genre');
var_dump($cats);
foreach ($cats as $cat)
{

$args = array(
'post_type' => 'compositions',
'genre' => $cat->slug
);

query_posts($args);

if (have_posts()) :
while (have_posts()) : the_post();

       the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>' );


endwhile;
endif;

}
endif;
?>


	</div> <!-- .row -->

</main>
</div> <!-- .row -->
</div> <!-- .row -->

<?php get_footer(); ?>
