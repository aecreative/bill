<?php
/**
 * The template for displaying REVIEWS page.
 *
 * @package WordPress
 * @subpackage Bill Howe
 *
 * Template Name: Reviews
 */

get_header(); ?>

	<div class="bd page-blue">
		<div class="wrap">
        	<?php get_sidebar('subMenu'); ?>
            
            
            <div class="page">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
?>
                <div class="colmask leftmenu">
                    <div class="colleft">
                        <div class="col1">
                            <!-- Column 1 start -->
                            <h1>Bill's Blog</h1>
								<div class="content">
									<div class="main ourreviews">
                            <h1 class="page-title"><?php if ( $wp_query->query_vars[page] == 0 ) { the_title(); } else { echo 'Full Review'; } ?></h1>
										<?php the_content(); ?>
										<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
									

				<?php comments_template( '/comments-reviews.php' ); ?>
                                    <br /><br />
                                    <?php if ( $wp_query->query_vars[page] > 0 ) echo '<p><a href="'. get_permalink(3363) .'"><strong>Back to Reviews</strong></a></p>'; ?>
                                    </div>
									<div class="side">
										<ul class="side-menu" role="complementary">
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
                            <div class="blogSidebar">
                                <ul class="side-menu" role="complementary">
                                	<?php get_sidebar(); ?>
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
