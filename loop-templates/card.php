<?php
$terms = get_the_terms( get_the_ID(), 'genres' );
foreach ( $terms as $term ) {
  $current_genre = $term->slug;
}
?>

<div class="card coloured">
	<?php
    $year = get_field('year');

   the_title( sprintf( '<div class="card-header" id="heading%s"><div class="container"><div class="row"><h3 class="mb-0"> <button class="btn btn-link font-style-2" data-toggle="collapse" data-target="#collapse%s" aria-expanded="true" aria-controls="collapse%s"><div class="year font-style-1 text-left">%s</div>',  $id, $id, $id, $year), '</button></h3></div></div>' );
  ?>
</div>

        <?php $video = get_field( "video" ); ?>
        <?php $audio = get_field( "audio" ); ?>
        <?php $player_attr = array(
        'src'      => $audio ,
        'loop'     => '',
        'autoplay' => '',
        'preload' => 'none',
        );?>

	  <?php echo sprintf('<div id="collapse%s" class="collapse" aria-labelledby="heading%s" data-parent="#accordion-%s">' , $id , $id, $current_genre);  ?>
	  <div class="card-body">
          <div class="container">
            <div class="row">
        <?php if( get_field("program_notes")) {?>
       		<div class="col-12">Duration : <?php echo get_field( "duration" ) ?></div>
        <?php } ?>
      <?php if( get_field("instrumentation")) {?>
 					<div class="col-12">Instrumentation: <?php echo get_field( "instrumentation" ) ?></div>
      <?php } ?>
            <?php if( get_field("program_notes") && (get_field("audio") || get_field("video")) ) { ?>
              <div class="col-md-6">
            <?php } else { ?>
               <div class="col-md-12">
            <?php } ?>
               <div><?php the_field("program_notes") ?></div>
               <?php echo sprintf('<div class="collapse" id="media-%s">' , $id);  ?>
               <div class="card card-body">
                 <?php echo get_field( "program_notes" ); ?>
               </div>
             </div>
              </div>


<?php if( get_field("program_notes") && (get_field("audio") || get_field("video")) ) { ?>
  <div class="col-md-6">
<?php } else { ?>
   <div class="col-md-12">
<?php } ?>
            <?php if( get_field("audio") ) : ?>
              <div class="audio-player"><?php echo wp_audio_shortcode( $player_attr ); ?></div>
              <div><?php echo get_field( "audio_details" ); ?></div>
            <?php endif ?>
            <?php if( get_field("video") ) : ?>
              <div><?php echo wp_oembed_get( $video ); ?></div>
              <div><?php echo get_field( "video_details" ); ?></div>
            <?php endif ?>
        </div>



    </div>
</div>
</div>
  </div>
</div>
