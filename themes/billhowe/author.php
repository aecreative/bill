<?php
/**
 * The template for displaying Author Archive pages.
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
                            <!-- Column 1 start -->
                            

<?php
	/* Queue the first post, that way we know who
	 * the author is when we try to get their name,
	 * URL, description, avatar, etc.
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

						<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'twentyten' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>
                        
<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'author' );
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
