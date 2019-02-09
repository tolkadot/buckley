<?php
/**
 * The home template file.
 *
 *
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="wrapper-index">
	<div class="home-page" id="content" tabindex="-1">
			<main class="site-main" id="main">
        <div class="container">
				<div class="row">
				<blockquote class="splash-quote">
				"<span>Composition</span> is an attempt to grasp and give <span>expresive</span> form to the fleeting inner images of the <span>imagination</span>"
				</blockquote>
				</div>

				<div class="row justify-content-end w-100">
                <cite>
                <span class="highlight">— John Buckley</span>
                <footer >
                <p>Contemporary Irish Composer</p>
                </footer>
                </cite>
        </div>
</div>
			</main><!-- #main -->
		</div><!-- #primary -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
