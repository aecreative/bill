<?php
/**
 * @package WordPress
 * @subpackage Bill Howe
 * @since Twenty Ten 1.0
 * Template Name: Home
 */

get_header(); ?>

		<div class="bd">
    	
            <div class="wrap">
                <?php //get_sidebar('subMenu'); ?>
                
                
                <div class="page new">
                    <div class="banner newhomeb">
                        <?php
							$bannerImages = getGroupOrder('banner_image');
							for ($i = 0, $c = count($bannerImages)+1; $i < $c; ++$i){
								$thumb = array ("w" => 640, "h" => 210);
								$thumbAttr = array("border" => "0");
								$bannerLink = get('banner_link', $i);
								if($bannerLink != ""){
									?><a href="<?php echo $bannerLink ?>"><?php
								}
								echo gen_image('banner_image',$i,1,$thumb,$thumbAttr);
								if($bannerLink != ""){
									?></a><?php
								}
							}
						?>
                    </div>
                    <?php /*
<map name="heartMap" id="heartMap">
  <area shape="rect" coords="0,0,963,275" href="http://www.billhowe.com/big-giveaway" />
</map> */ ?>
                    <div class="buttons new">
                        <ul>
                            <li>
                                <a href="<?php echo get_permalink(16); ?>" class="plumbing">Plumbing</a><?php /*
                                <div class="gp">
                                    <!-- Place this tag where you want the +1 button to render -->
                                    <g:plusone size="medium" count="false" href="<?php echo get_permalink(16); ?>"></g:plusone>
                                </div> */ ?>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(18); ?>" class="hvac">Heating &amp; Air Conditioning</a><?php /*
                                <div class="gp">
                                    <!-- Place this tag where you want the +1 button to render -->
                                    <g:plusone size="medium" count="false" href="<?php echo get_permalink(18); ?>"></g:plusone>
                                </div> */ ?>
                            </li><?php /*
                            <li>
                                <a href="<?php echo get_permalink(49); ?>" class="design">Design Remodeling</a>
                                <div class="gp">
                                    <!-- Place this tag where you want the +1 button to render -->
                                    <g:plusone size="medium" count="false" href="<?php echo get_permalink(49); ?>"></g:plusone>
                                </div> 
                            </li>*/ ?>
                            <li>
                                <a href="<?php echo get_permalink(30); ?>" class="restoration">Restoration Flood Services</a><?php /*
                                <div class="gp">
                                    <!-- Place this tag where you want the +1 button to render -->
                                    <g:plusone size="medium" count="false" href="<?php echo get_permalink(30); ?>"></g:plusone>
                                </div> */ ?>
                            </li>
                        </ul>
                    </div>
                    <div id="container3" class="hcols">
                                <div class="hcol1">
                                    <!-- Column one start -->
                                    <?php
									if(have_posts()): 
										while(have_posts()): 
										the_post();
									?>
                                    		<p><?php the_content(); ?></p>
                                    <?php
										endwhile;
									endif;
									rewind_posts();
									?>
                                    <!-- Column one end -->
                                    
                                    <?php dynamic_sidebar('hgiveaway'); ?>
                                    <div class="hblc c2">
                                    	<h3 class="hbt">Press Room</h3>
                                        <?php
										$latestv = get_posts(array(
											'numberposts' => 1,
											'category' => 9,
										));
										$latestv = $latestv[0];
										$yt = substr($latestv->post_content, strpos($latestv->post_content, '?v=')+3, 11);
										if ( $yt ) {
										echo '<a href="'. get_permalink($latestv->ID) .'" class="ythm"><img src="http://i1.ytimg.com/vi/'. esc_attr($yt) .'/hqdefault.jpg" alt="" width="251" border="0" /><span class="p"></span></a>';
										}
										$ptitle = esc_attr($latestv->post_title);
										/*if ( strlen($ptitle) > 75 ) {
											$ptitle = substr($ptitle, 0, strrpos(substr($ptitle,0,75), ' ')) .'...';
										}*/
										
										echo '<p><strong>Video:</strong> <a href="'. get_permalink($latestv->ID) .'" title="'. esc_attr($latestv->post_title) .'">'. $ptitle .'</a></p>';
										
										
										$latestv = get_posts(array(
											'numberposts' => 1,
											'category' => 8,
										));
										$latestv = $latestv[0];
										
										$ptitle = esc_attr($latestv->post_title);
										/*if ( strlen($ptitle) > 60 ) {
											$ptitle = substr($ptitle, 0, strrpos(substr($ptitle,0,60), ' ')) .'...';
										}*/
										
										
										echo '<p><strong>Press Release:</strong> <a href="'. get_permalink($latestv->ID) .'" title="'. esc_attr($latestv->post_title) .'">'. $ptitle .'</a></p>';
										?>
                                        <a href="<?php echo get_category_link(9); ?>" class="nbtn">View All Media</a>
                                    </div>
                                    <div class="hblc sh">
                                        <h3 class="hbt">Bill Howe Newsletter</h3>
                                        <p><strong>Sign up Today to start receiving<br />monthly specials.</strong></p><br />
                                        <?php echo do_shortcode('[contact-form-7 id="5060" title=""]'); ?>
                                        <p class="news-archive"><img src="<?php bloginfo('template_url') ?>/images/icons/newsletter_arch.jpg" alt="Visit the Newsletter Archive" /><a href="<?php echo get_permalink(6628); ?>">Visit the Newsletter Archive</a></p>
                                    </div>
                                    <div class="hblc c2 sh">
                                        <h3 class="hbt">Bill Howe Blog</h3>
                                        <?php
										$latestv = get_posts(array(
											'numberposts' => 1,
											'category' => 3,
										));
										$latestv = $latestv[0];
										
										$postex = wp_kses($latestv->post_content, array());
										if ( strlen($postex) > 241 ) {
											$cutat = strrpos(substr($postex,0,241),' ');
											$postex = substr($postex, 0, $cutat);
										}
										echo '<p><strong>'. esc_attr($latestv->post_title) .'</strong> '. $postex .'... <a href="'. get_permalink($latestv->ID) .'">Read More</a></p>';
										?><br />
										<a href="<?php echo get_permalink(125); ?>" class="nbtn">View Blog</a>
                                    </div>
                                </div>
                                <?php /*
                                <div id="col2" style="left: 70.67%; padding: 0; width: 34.33%">
<img border="0" usemap="#contestMap" src="http://www.billhowe.com/wp-content/uploads/2011/12/1hearthealthy-callout.jpg" alt="Healthy Heart Drawing Contest" />
<map name="contestMap" id="contestMap">
  <area shape="rect" coords="15,242,304,289" href="http://www.billhowe.com/HealthyHeartsContest/Terms" />
</map>
                                    <!-- Column two start -->
<?php
                                    */
                                    /*

                                    echo '>';
									query_posts( 'posts_per_page=1&post_type=post&category_name=Blog' );
									if(have_posts()) : 
										while(have_posts()) :
										the_post();
									?>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <p><?php the_excerpt(); ?></p>
                                            <p class="text-align-right"><a href="<?php the_permalink(); ?>">Read Blog&hellip;</a></p>
                                    <?php 
										endwhile;
									endif;
									*/
									/*
									?>
                                    <!-- Column two end -->
                                </div>
                                <div id="col3" style="left:70.67%">
                                    <!-- Column three start -->
                                    <div class="top newsletterSignup">
                                        <div class="hide">
                                            <h2>Bill Howe Newsletter</h2>
                                            <p class="text-align-right">Sign up Today to start receiving</p>
                                            <p class="text-align-right">Monthly Specials</p>
                                        </div>
                                        <?php echo do_shortcode('[contact-form 10 "Newsletter Sign-up"]'); ?>
                                    </div>
                                    <div class="bottom bhGoesGreen">
                                        <div class="hide">
                                            <h2>Bill Howe Goes Green</h2>
                                            <p><a href="<?php bloginfo('url'); ?>/going-green/">Learn More</a></p>
                                        </div>
                                        <a href="<?php bloginfo('url'); ?>/going-green/"><img src="<?php bloginfo('template_url') ?>/images/bg/bh-goes-green.jpg" width="307" height="159" alt="Bill Howe Goes Green" /></a>
                                    </div>
                                    <!-- Column three end -->
                                </div>
								*/ ?>
                                <div id="hcol2">
                                <?php
								get_sidebar('right');
								?>
                                </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
