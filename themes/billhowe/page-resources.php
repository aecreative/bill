<?php
/**
 * Template Name: Resources - Plumbing
 *
 * @package WordPress
 * @subpackage Bill Howe
 */

global $post;

$meta_color = get_post_meta( $post->ID, 'resources_meta_color', true );
$meta_template = get_post_meta( $post->ID, 'resources_meta_template', true );

get_header(); ?>

	<div class="bd page-<?php echo $meta_color; ?> resources resource-<?php echo $meta_template; ?>">
		<div class="wrap">
        	<?php get_sidebar('subMenu'); ?>
            
            
            <div class="page">
            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$panel_name = get_panel_name();
?>
                <div class="colmask leftmenu">
                    <div class="colleft">
                        <div class="col1">
                            <!-- Column 1 start -->
                            <h1><?php the_title(); ?></h1>
                            <?php 
							 //C:\Ninthlink\bill_howe\wp-content\themes\billhowe\images\plumbing-banner
								$bannerImages = getFieldOrder('banner_image'); 
								$testBanner = get('banner_image',1,1);
								if($testBanner) {
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
								}
                                else {
                                ?>
                                <div class="banner" style="position: relative;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/plumbing-banner/plumbing1.jpg" border="0" class="banner" style="position: absolute; top: 0px; left: 0px; width: 740px; height: 215px;" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/plumbing-banner/plumbing2.jpg" border="0" class="banner" style="position: absolute; top: 0px; left: 0px; display: none; opacity: 0; width: 740px; height: 215px;" />
                                </div>
                                <?php } ?>
								<div class="content">
									<div class="main">
                                    <?php if($panel_name != 'staff'): ?>
										<?php the_content(); ?>

										<br />
										<?php echo render_testimonial( $meta_template ); ?>

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
							</div>
                            <div class="inner">
								<ul class="side-menu" role="complementary">
                                	<li>
									<?php
                                    if ( isset($meta_template) && !empty($meta_template) ) {
                                        wp_nav_menu( array( 'container_class' => 'side-menu', 'menu' => 'resources-' . $meta_template ) );
                                    }
                                    else {
                                        $sideBarMenu = get('sidebar_menu');
                                        ?><h3 class="widget-title"><?php echo $sideBarMenu; ?></h3><?php
                                        if($sideBarMenu){
                                            wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => $sideBarMenu ) );
                                        }
                                    }
                                    ?>
                                	</li>
                                </ul>
                                <?php render_areas_of_expertise( $meta_template, false ); ?>
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
