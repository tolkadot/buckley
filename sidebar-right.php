<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
	<?php endif; ?>
<form method="get" id="searchform" action="/home" role="search" class="search-form hide-mobile">
						<input type="search" name="s" value="" id="s" placeholder="Enter your search here..."><div class="search-enter"><input type="submit" id="searchsubmit" value=""></div>
						</form>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #secondary -->
