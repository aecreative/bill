<?php
/**
 * Template Name: HVAC Landing
 *
 * @package WordPress
 * @subpackage Bill Howe
 *
 */
wp_enqueue_style('CabinCondensed', 'http://fonts.googleapis.com/css?family=Cabin+Condensed:400,600' );

get_header('landing'); ?>

		<div class="page">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post();
			global $post;

				the_post_thumbnail( 'landing', array(
					'class' => 'limg',
					'title' => false,
					'alt' => ''
				));
				
				$lnum = billhowe_phonenumber();
				
				$custom = get_post_meta($post->ID,'left_text');
				$ltxt = $custom[0];
				if ( $ltxt && ( $ltxt != '' ) ) {
					echo '<div class="ltxt"><table width="550"><tr><td width="113"><div class="bh"></div></td><td width="437"><span class="bht">'. nl2br($ltxt) .'</span></td></tr></table></div>';
				}
			?>

			<div class="lnum"><?php esc_attr_e( $lnum ); ?></div>
		    
		    <?php
			$custom = get_post_meta($post->ID,'arrow_text');
			$ltxt = $custom[0];
			if ( $ltxt && ( $ltxt != '' ) ) {
				echo '<div class="arrt">'. esc_attr($ltxt) .'</div>';
			}
			?>
			
			<div class="lform">
            	<table class="tar">
            		<tr>
            			<td>
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
					
					$tar = str_replace( '[num]', $lnum, $tar );
					
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
					$rform = str_replace('value="GET A FREE ESTIMATE"', 'value="'. esc_attr($sub) .'"', $rform);
				}
				
				echo $rform;
				?>
            </div>
            
            <div class="main">
				<?php
				//the_content();
				$content = $post->post_content;
				$moreat = strpos($content, '<!--more-->');
				$splitcontent = '<div id="lleft">'. apply_filters('the_content', substr($content,0,$moreat)) .'</div><div class="lright">'. apply_filters('the_content',substr($content,$moreat)) .'</div>';
				echo $splitcontent;


				$custom = get_post_meta($post->ID,'ty_url');
				$tyurl = $custom[0];
				echo '<script type="text/javascript">var bh_tyurl = "'. esc_url($tyurl) .'"</script>';
				?>
            </div>

<?php endwhile; ?> 
		</div>
<?php get_footer('landing'); ?>
