<?php
/**
 * Template Name: PPC Landing
 *
 * @package WordPress
 * @subpackage Bill Howe
 *
 */
wp_enqueue_style('CabinCondensed', 'http://fonts.googleapis.com/css?family=Cabin+Condensed:400,600' );

get_header('landing'); ?>
		<div class="page p">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post();
			global $post;

				the_post_thumbnail( 'landing', array(
					'class' => 'limg',
					'title' => false,
					'alt' => ''
				));
				/*
				$custom = get_post_meta($post->ID,'phone');
				$lnum = $custom[0];
				
				if ( $lnum & ( $lnum != '' ) ) {
					$lnum = billhowe_phonenumber();
				}
				*/
				$lnum = billhowe_phonenumber();
				
				$custom = get_post_meta($post->ID,'left_text');
				$ltxt = $custom[0];
				if ( $ltxt && ( $ltxt != '' ) ) {
					echo '<div class="ltxt p"><table width="620"><tr><td width="60%"><span class="bht">'. nl2br($ltxt) .'</span></td><td width="40%" class="lnum p">'. esc_attr($lnum) .'</td></tr></table></div>';
				}
			?>

		    <?php
			$custom = get_post_meta($post->ID,'arrow_text');
			$ltxt = $custom[0];
			if ( $ltxt && ( $ltxt != '' ) ) {
				echo '<div class="arrt p">'. esc_attr($ltxt) .'</div>';
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
			            </td>
			        </tr>
			    </table>
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
            <div class="main">
                <?php the_content(); ?>
            </div>
<?php endwhile; ?>      
		</div>
<?php get_footer('landing'); ?>
