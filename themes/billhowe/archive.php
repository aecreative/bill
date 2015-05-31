<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
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
                            <h1>Bill's Blog</h1>
                            <div class="content">
                                <div class="main">
                            

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>
<!-- Column 1 start -->  
							<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
							</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archives.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

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
            </div>
        </div>
        <br class="clear-fix" />
    </div>
<?php get_footer(); ?>
