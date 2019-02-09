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

<div class=" wrapper " id="archive-wrapper">

	<div class="" id="content" tabindex="-1">


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
<div class="col-4-fixed">
<header class="entry-header">
  <h1 class="entry-title">Work</h1>
</header>
<div class="compositions-nav-container">
<div class="nav flex-column nav-pills genre-list-static" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active genre-item--1" id="v-pills-solo-tab" data-toggle="pill" href="#v-pills-solo" role="tab" aria-controls="v-pills-solo" aria-selected="false">solo</a>
  <a class="nav-link genre-item--2" id="v-pills-orchestral-tab" data-toggle="pill" href="#v-pills-orchestral" role="tab" aria-controls="v-pills-orchestral" aria-selected="false">orchestral</a>
  <a class="nav-link genre-item--4" id="v-pills-chamber-tab" data-toggle="pill" href="#v-pills-chamber" role="tab" aria-controls="v-pills-chamber" aria-selected="false">chamber</a>
  <a class="nav-link genre-item--5" id="v-pills-vocal-tab" data-toggle="pill" href="#v-pills-vocal" role="tab" aria-controls="v-pills-vocal" aria-selected="false">vocal</a>
  <a class="nav-link genre-item--6" id="v-pills-band-tab" data-toggle="pill" href="#v-pills-band" role="tab" aria-controls="v-pills-band" aria-selected="false">band</a>
  <a class="nav-link genre-item--3" id="v-pills-educational-tab" data-toggle="pill" href="#v-pills-educational" role="tab" aria-controls="v-pills-educational" aria-selected="false">educational</a>
  <a class="nav-link genre-item--7" id="v-pills-film-tab" data-toggle="pill" href="#v-pills-film" role="tab" aria-controls="v-pills-film" aria-selected="false">film</a>
  <a class="nav-link genre-item--8" id="v-pills-arrangements-tab" data-toggle="pill" href="#v-pills-arrangements" role="tab" aria-controls="v-pills-arrangements" aria-selected="false">arrangements</a>
 </div>
</div>
</div>


<div class="col-9 col-4-margin">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade" id="v-pills-educational" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="educational">
				<?php wp_reset_query(); ?>
				<?php  get_template_part( 'loop-templates/educational', 'none' ); ?>
				</div>
  </div>
  <div class="tab-pane fade show active" id="v-pills-solo" role="tabpanel" aria-labelledby="solo-tab">
				<div class="solo">
				<?php wp_reset_query(); ?>
				<?php get_template_part( 'loop-templates/solo', 'none' ); ?>
				</div>
  </div>
  <div class="tab-pane fade" id="v-pills-orchestral" role="tabpanel" aria-labelledby="contact-tab">
          <div class="orchestral">
					<?php wp_reset_query(); ?>
				  <?php get_template_part( 'loop-templates/orchestral', 'none' ); ?>
			   </div>
  </div>
<div class="tab-pane fade" id="v-pills-chamber" role="tabpanel" aria-labelledby="contact-tab">
        <div class="chamber">
        <?php wp_reset_query(); ?>
        <?php get_template_part( 'loop-templates/chamber', 'none' ); ?>
       </div>
</div>
<div class="tab-pane fade" id="v-pills-vocal" role="tabpanel" aria-labelledby="contact-tab">
        <div class="vocal">
        <?php wp_reset_query(); ?>
        <?php get_template_part( 'loop-templates/vocal', 'none' ); ?>
       </div>
</div>
<div class="tab-pane fade" id="v-pills-band" role="tabpanel" aria-labelledby="contact-tab">
        <div class="band">
        <?php wp_reset_query(); ?>
        <?php get_template_part( 'loop-templates/band', 'none' ); ?>
       </div>
</div>
<div class="tab-pane fade" id="v-pills-film" role="tabpanel" aria-labelledby="contact-tab">
        <div class="film">
        <?php wp_reset_query(); ?>
        <?php get_template_part( 'loop-templates/film', 'none' ); ?>
       </div>
</div>
<div class="tab-pane fade" id="v-pills-arrangements" role="tabpanel" aria-labelledby="contact-tab">
        <div class="arrangements">
        <?php wp_reset_query(); ?>
        <?php get_template_part( 'loop-templates/arrangements', 'none' ); ?>
       </div>
</div>
</div>
</div>







				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
		<!-- 	<?php understrap_pagination(); ?>
 -->
		</div><!-- #primary -->

		<!-- Do the right sidebar check -->


	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
