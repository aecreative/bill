<?php
/**
 * The template for displaying Tag Archive pages.
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

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
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
