<?php
/**
 * Template Name: HVAC PPC Landing
 *
 * @package WordPress
 * @subpackage Bill Howe
 *
 */
wp_enqueue_style('CabinCondensed', 'http://fonts.googleapis.com/css?family=Cabin+Condensed:400,600' );
wp_enqueue_style('Cabin', 'http://fonts.googleapis.com/css?family=Cabin:400,700,700italic' );

global $post, $wp_query;
if(isset($wp_query->query_vars['keyword'])) {
	$wp_query->query_vars['kw'] = $wp_query->query_vars['keyword'];
}
get_header('landing'); ?>
		<div class="page p">
			<div class="ptop">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post();
				global $post;
				?>

				<!-- Header above hero image -->
				<div class="bhlheader">
					<a href="<?php bloginfo('url'); ?>" class="logo">Bill Howe</a>
					<div class="tagline"><?php echo do_shortcode('[keyword default="Best San Diego HVAC Company"]'); ?></div>
				</div>

				<?php
					// top left hero image
					the_post_thumbnail( 'landing', array(
						'class' => 'limg',
						'title' => false,
						'alt' => ''
					));
					$custom = get_post_meta($post->ID,'phone');
							$lnum = $custom[0];
							if ( $lnum & ( $lnum != '' ) ) {
								$lnum = billhowe_phonenumber();
							}
					$lnum = billhowe_phonenumber();
					// phone number on arrow below image
					echo '<div class="lnum">'. $lnum .'</div>';

					$lnum = billhowe_phonenumber( false );
				?>
    <?php
	$custom = get_post_meta($post->ID,'arrow_text');
	$ltxt = $custom[0];
	if ( $ltxt && ( $ltxt != '' ) ) {
		echo '<div class="arrt">'. esc_attr($ltxt) .'</div>';
	}
	?>
			<div class="lform">
            <table class="tar">
            <tr><td>
            <?php
			$custom = get_post_meta($post->ID,'top_arrow');
			$tar = $custom[0];
			echo apply_filters('the_content', $tar);
			?>
            </td></tr></table>
            <div class="pref">
            <?php
			$custom = get_post_meta($post->ID,'right_text');
			$tar = $custom[0];
			
			//$tar = str_replace( '[num]', $lnum, $tar );
			
			echo apply_filters('the_content', $tar);
			?>
            </div>
            <?php
			$custom = get_post_meta($post->ID,'right_form');
			$rform = $custom[0];
			$rform = apply_filters('the_content', $rform);
			
			
			$custom = get_post_meta($post->ID,'submit_btn');
			$sub = $custom[0];
			if ( $sub && ( $sub != '' ) ) {
				if ( strpos( $rform, 'value="GET A FREE ESTIMATE"' ) ) $rform = str_replace('value="GET A FREE ESTIMATE"', 'value="'. esc_attr($sub) .'"', $rform);
				if ( strpos( $rform, 'value="submit"' ) ) $rform = str_replace('value="submit"', 'value="'. esc_attr($sub) .'"', $rform);
			}
			
			echo $rform;
			?>
            </div>
            </div>
            <div class="main">
                <?php the_content(); ?>
            </div>
            <div class="pageend"></div>
<?php endwhile; ?>      
		</div>
<?php get_footer('landing'); ?>
