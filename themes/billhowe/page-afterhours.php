<?php
/**
 * Template Name: AfterHours
 *
 * @package WordPress
 * @subpackage Bill Howe
 *
 */
wp_enqueue_style('CabinCondensed', 'http://fonts.googleapis.com/css?family=Cabin+Condensed:400,600' );

get_header('landing'); ?>
		<div class="page ah">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="ahphone"><?php
			$lnum = billhowe_phonenumber();
			esc_attr_e( $lnum );
			?></div>
            <div class="main">
                <?php the_content(); ?>
            </div>
<?php endwhile; ?>      
		</div>
<?php get_footer('landing'); ?>
