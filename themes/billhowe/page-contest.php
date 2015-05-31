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
 *
 * Template Name: HealthyHeartsContest
 */

get_header(); ?>

	<div class="bd page-blue">
		<div class="wrap">
        	<?php get_sidebar('subMenu'); ?>
            
            
            <div class="page">
            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$panel_name = get_panel_name();
?>
                <div class="colmask leftmenu">
                    <div class="colleft">
                        <div class="col1 contest">
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
								<div class="content contest">
									<div class="main">
                                    <?php if($panel_name != 'staff'): ?>
										<?php the_content(); ?>
										<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
									
                                    <?php else: ?>
                                    <?php if(get('staff_info_title')){ ?>
                                        <h3><?php echo get('staff_info_title'); ?></h3>
                                        <?php } ?>
                                        <?php if(get('staff_info_photo')){ ?>
                                    	<p class="alignleft"><?php 
										$params = array('w' => 140, 'h' => 140);
										echo gen_image('staff_info_photo', 1, 1, $params); 
										?></p>
                                        <?php } ?>
                                        <?php if(get('staff_info_bio')){ ?>
										<?php echo get('staff_info_bio'); ?>
                                        <?php } ?>
                                        <?php if(get('staff_info_email')){ ?>
                                        <p><?php echo get('staff_info_email'); ?></p>
                                        <?php } ?>
                                    <?php endif; ?>
                                    <br /><br />
                                    <?
									$images = getFieldOrder('gallery_image');
									$testImage = get_image('gallery_image',1,1);
									if($testImage){
										?><div class="gallery"><?php
										$i = 1;
										foreach($images as $galleryPhoto){
											$imgUrl = get_image('gallery_image',1,$i);
											$thumb = array ("w" => 105, "h" => 105);
											$thumbAttr = array("border" => "0");
											?><a href="<?php echo get('gallery_image',1,$i, 0); ?>" rel="gallery" title="<?php the_title(); ?>" class="pirobox_gall"><?php
												echo gen_image('gallery_image',1,$i,$thumb,$thumbAttr);
											?></a><?php
											$i++;
										}
										?></div><?php
									}
									?>
                                    </div>
									<div class="side">
										<ul>
											<li><a href="http://www.billhowe.com/wp-content/uploads/2015/01/aha-2015.pdf" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/contest/entertoday2.jpg" alt="Enter Today" border="0" width="215" height="118" style="margin: 10px auto 0; display: block" /></a></li>
                                            <li class="tips">
                                            <ul>
                                            <?php wp_list_pages('title_li=&child_of=1617'); ?>
                                            <li><br /><a href="http://www.billhowe.com/healthy-heart-tips"><img src="<?php bloginfo('template_url'); ?>/images/contest/moretips.png" alt="More healthy Tips" border="0" /></a></li>
                                            </ul>
                                            </li>
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
			    </div>
                            <div class="inner">
								<ul class="side-menu" role="complementary">
                                	<li>
									<?php
                                    $sideBarMenu = get('sidebar_menu');
									switch($sideBarMenu) {
										case 'HealthyHeartContest':
										case 'HealthTips':
											$sidemenutitle = 'Additional Information';
											break;
										default:
											$sidemenutitle = $sideBarMenu;
											break;
									}
                                    ?><h3 class="widget-title"><?php echo $sidemenutitle; ?></h3><?php
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
                
<?php endwhile; ?>
                
            </div>
        </div>
        <br class="clear-fix" />
    </div>
<?php get_footer(); ?>
