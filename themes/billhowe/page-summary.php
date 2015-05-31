<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Bill Howe
 * Template Name: Page Summary
 */

get_header(); ?>

	<div class="bd">
		<div class="wrap">
        	<?php get_sidebar('subMenu'); ?>
            
            
            <div class="page">

                <div class="colmask leftmenu">
                    <div class="colleft">
                        <div class="col1">
                            <!-- Column 1 start -->
                            <h1><?php the_title(); ?></h1>
                            <?php 
							
								$bannerImages = getFieldOrder('banner_image'); 
								$testBanner = get('banner_image',1,1);
								if($testBanner):
								?>
                            <div class="banner">
                            	<?php
									$i = 1;
									foreach($bannerImages as $bannerImage => $value){
										$thumb = array ("w" => 740, "h" => 215);
										$thumbAttr = array("border" => "0");
										echo gen_image('banner_image',1,$i,$thumb,$thumbAttr);
										$i++;
									}
								?>
                            </div>
								<?php
								endif;
								?>
                            <div class="content">
                                <div class="main">
                                    <?php 
										$temp = get_post($ID);
										$temp = $temp->post_content;
										if( $temp )
										{
											?>
											<div class="hentry">
												<p style="font-size:15px;"><?php echo $temp ?></p>
                                                <br /><br />
											</div>
											<?php 
										}
										$childposts = new WP_Query( 'posts_per_page=-1&orderby=menu_order&order=ASC&post_type=page&post_parent=' . $post->ID );
										while ( $childposts->have_posts() ) : $childposts->the_post();
										
											$id = get_the_ID();
											?>
											<div class="hentry">                                
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<?php
												if(get_panel_name() == 'staff'){
													if(get('staff_info_photo', 1, 1, 1, $id)){
														$params = array('w' => 80, 'h' => 80);
														?><p class="alignleft"><a href="<?php the_permalink(); ?>"><?php echo gen_image('staff_info_photo', 1, 1, $params, 1, $id); ?></a></p><?php
													}
													if(get('staff_info_bio', 1, 1, 1, $id)){
														?><p><strong><?php 
														echo strip_tags(get('staff_info_title', 1, 1, 1, $id));
														?></strong> - <?php
														echo truncate(strip_tags(get('staff_info_bio', 1, 1, 1, $id)),200);
														 ?> <a href="<?php the_permalink(); ?>">Continue Reading&rarr;</a></p><?php
													}
												}else{
													?>
                                                    <p><?php echo truncate(strip_tags(get_the_content()),200); ?> <a href="<?php the_permalink(); ?>">Continue Reading&rarr;</a></p>
													<?php
												}
												?>
												<br /><br />
												<div class="clear"></div>
											</div>		
										<?php
										endwhile;
										?>
                                </div>
                                <div class="side">
                                	<ul>
                                    	<?php get_sidebar('right'); ?>
                                     </ul>
                                </div>
                            </div>
                            <!-- Column 1 end -->
                        </div>
                        <div class="col2">
                            <!-- Column 2 start -->
			    <div class="gp">
                            <!-- Place this tag where you want the +1 button to render -->
			    <g:plusone href="<?php echo get_permalink(); ?>"></g:plusone>
			    </div><div class="inner">
                            	<ul class="side-menu" role="complementary">
                                	<li>
									<?php
                                    $sideBarMenu = get('sidebar_menu');
                                    ?><h3 class="widget-title"><?php echo $sideBarMenu; ?></h3><?php
                                    if($sideBarMenu){
                                        wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => $sideBarMenu ) );
                                    }
                                    ?>
                                	</li>
                                </ul>
                            </div>
                        <!-- Column 2 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br class="clear-fix" />
    </div>
<?php get_footer(); ?>
